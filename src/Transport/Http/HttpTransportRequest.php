<?php

namespace App\Transport\Http;

use App\Transport\RequestInterface;

class HttpTransportRequest implements RequestInterface
{
    const METHOD_GET = 'GET';
    const METHOD_POST = 'POST';
    const METHOD_PUT = 'PUT';
    const METHOD_PATCH = 'PATCH';
    const METHOD_HEAD = 'HEAD';
    const METHOD_OPTIONS = 'OPTIONS';
    const METHOD_DELETE = 'DELETE';
    /** @var array */
    protected $headers = [];
    /** @var HttpTransportRequestOptions */
    protected $options = null;
    /** @var string */
    protected $body = '';
    /** @var string */
    private $url = '';
    /** @var string */
    private $method = self::METHOD_GET;

    public function getUrl(): string
    {
        return $this->url;
    }

    public function setUrl(string $url)
    {
        $this->url = $url;
    }

    public function getMethod(): string
    {
        return $this->method;
    }

    public function setMethod(string $method)
    {
        $this->method = $method;
    }

    public function getHeaders(): array
    {
        return $this->headers;
    }

    public function setHeaders(array $headers)
    {
        $this->headers = $headers;
    }

    public function getOptions(): ?HttpTransportRequestOptions
    {
        return $this->options;
    }

    public function setOptions(HttpTransportRequestOptions $options = null)
    {
        $this->options = $options;
    }

    public function getBody(): string
    {
        return $this->body;
    }

    public function setBody(string $body)
    {
        $this->body = $body;
    }
}