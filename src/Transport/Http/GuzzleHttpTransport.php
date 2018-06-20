<?php

namespace App\Transport\Http;

use App\Transport\Exception\TransportException;
use App\Transport\RequestInterface;
use App\Transport\ResponseInterface;
use App\Transport\Transport;
use \GuzzleHttp\Client;
use \GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use \GuzzleHttp\TransferStats;

class GuzzleHttpTransport extends Transport implements HttpTransportInterface
{
    /** @var HttpTransportRequest */
    private $request;

    /** @var HttpTransportResponse */
    private $response;

    /**
     * @param RequestInterface  $request
     * @param ResponseInterface $response
     *
     * @throws TransportException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function send(RequestInterface $request, ResponseInterface $response): void
    {
        if (!$request instanceof HttpTransportRequest) {
            throw new \InvalidArgumentException('Request must be of type HttpTransportRequest');
        }
        if (!$response instanceof HttpTransportResponse) {
            throw new \InvalidArgumentException('Response must be of type HttpTransportResponse');
        }

        $this->request = $request;
        $this->response = $response;

        $options = $this->getOptionsArray();
        $options['on_stats'] = function (TransferStats $stats) use ($request, $response) {
            $request->setHeaders($stats->getRequest()->getHeaders());

            if ($stats->hasResponse()) {
                $httpResponse = $stats->getResponse();
                $response->setBody((string) $httpResponse->getBody());
                $response->setStatusCode((int) $httpResponse->getStatusCode());
                $response->setHeaders($httpResponse->getHeaders());
                $response->setStatusMessage((string) $httpResponse->getReasonPhrase());
                $response->setHttpVersion((string) $httpResponse->getProtocolVersion());

                // Request timeout case.
                if (28 == $stats->getHandlerErrorData() && 200 == $httpResponse->getStatusCode()) {
                    $response->setStatusCode(HttpTransportResponse::STATUS_UNKNOWN);
                }
            }
        };

        $this->updateHostFromUri($request);
        $httpClientRequest = new Request($request->getMethod(), $request->getUrl(), $request->getHeaders(), $request->getBody());
        $httpClientResponse = null;

        try {
            $this->doBeforeSend();

            $client = new Client();
            $httpClientResponse = $client->send($httpClientRequest, $options);
        } catch (\Throwable $exception) {
            throw new TransportException($exception->getMessage(), $exception->getCode(), $exception);
        } finally {
            $this->doAfterSend();
        }

        if ($httpClientResponse) {
            $response->setStatusCode((int) $httpClientResponse->getStatusCode());
            $response->setStatusMessage((string) $httpClientResponse->getReasonPhrase());
            $response->setHttpVersion((string) $httpClientResponse->getProtocolVersion());
            $response->setHeaders($httpClientResponse->getHeaders());
            $response->setBody((string) $httpClientResponse->getBody());
        }
    }

    /**
     * @return array
     * @throws TransportException
     */
    private function getOptionsArray(): array
    {
        $httpTransportRequestOptions = $this->request->getOptions();

        $options = [];
        $options['curl'] = [];
        // Set to false to disable throwing exceptions on an HTTP protocol errors (i.e., 4xx and 5xx responses).
        $options[RequestOptions::HTTP_ERRORS] = false;
        $options[RequestOptions::EXPECT] = false;
        $options[RequestOptions::HEADERS] = [];

        if ($httpTransportRequestOptions) {
            if ($httpTransportRequestOptions->getConnectionTimeout()) {
                $options[RequestOptions::CONNECT_TIMEOUT] = $httpTransportRequestOptions->getConnectionTimeout();
            }
            if ($httpTransportRequestOptions->getResponseTimeout()) {
                $options[RequestOptions::TIMEOUT] = $httpTransportRequestOptions->getResponseTimeout();
            }
            if ($httpTransportRequestOptions->getMaxRedirectCount()) {
                $options[RequestOptions::ALLOW_REDIRECTS] = ['max' => $httpTransportRequestOptions->getMaxRedirectCount()];
            }
            if ($httpTransportRequestOptions->getHttpAuth()) {
                if ($httpTransportRequestOptions->getHttpAuthType() === HttpTransportAuthType::BASIC) {
                    $authString = $httpTransportRequestOptions->getHttpAuth();
                    list($username, $password) = explode(':', $authString, 2);
                    $options[RequestOptions::AUTH] = [$username, $password];
                }
            }
            $options['ssl'] = [];
            $options['ssl']['verifyhost'] = $httpTransportRequestOptions->isVerifyHost();
            $options['ssl']['verifypeer'] = $httpTransportRequestOptions->isVerifyPeer();
            if ($httpTransportRequestOptions->getSslVersion()) {
                $sslVersion = $this->mapSslVersion($httpTransportRequestOptions->getSslVersion());
                $options['ssl']['version'] = $sslVersion;
                $options['curl'][CURLOPT_SSLVERSION] = $sslVersion;
            }
            $options[RequestOptions::VERIFY] = $httpTransportRequestOptions->isVerifyHost() || $httpTransportRequestOptions->isVerifyPeer();
            if ($httpTransportRequestOptions->getProxyHost() && $httpTransportRequestOptions->getProxyPort()) {
                $options[RequestOptions::PROXY] = sprintf('http://%s:%d', $httpTransportRequestOptions->getProxyHost(), $httpTransportRequestOptions->getProxyPort());
            }
            if ($httpTransportRequestOptions->isEnableCompress()) {
                $options[RequestOptions::DECODE_CONTENT] = true;
                $options[RequestOptions::HEADERS]['Accept-Encoding'] = 'gzip';
            } else {
                $options[RequestOptions::DECODE_CONTENT] = false;
            }
            if ($httpTransportRequestOptions->getUserAgent()) {
                $options[RequestOptions::HEADERS]['User-Agent'] = $httpTransportRequestOptions->getUserAgent();
            }
        }

        return $options;
    }

    /**
     * @param string $sslVersion
     *
     * @return int
     * @throws TransportException
     */
    private function mapSslVersion(string $sslVersion): int
    {
        switch ($sslVersion) {
            case HttpTransportRequestOptions::SSL_VERSION_TLSv1_0:
                return CURL_SSLVERSION_TLSv1_0;
            case HttpTransportRequestOptions::SSL_VERSION_TLSv1_1:
                return CURL_SSLVERSION_TLSv1_1;
            case HttpTransportRequestOptions::SSL_VERSION_TLSv1_2:
                return CURL_SSLVERSION_TLSv1_2;
            default:
                throw new TransportException("Can't convert ssl version to transport specific");
        }
    }

    /**
     * @param HttpTransportRequest $request
     *
     * @throws TransportException
     */
    private function updateHostFromUri(HttpTransportRequest $request): void
    {
        $headers = $request->getHeaders();
        foreach ($headers as $headerName => $headerValue) {
            if ('host' === strtolower($headerName)) {
                return;
            }
        }

        $uriParts = parse_url($request->getUrl());
        if (false === $uriParts) {
            throw new TransportException("Unable to parse URI");
        }

        if ('' === $uriParts['host']) {
            return;
        }

        $host = $uriParts['host'];
        if (!empty($uriParts['port'])) {
            $host .= ':' . $uriParts['port'];
        }

        $newHeaders = ['Host' => $host] + $headers;
        $request->setHeaders($newHeaders);
    }

    public function getLastRequest(): ?HttpTransportRequest
    {
        return $this->request;
    }

    public function getLastResponse(): ?HttpTransportResponse
    {
        return $this->response;
    }
}