<?php

namespace App\Transport\Http;

class HttpTransportRequestOptions
{
    const SSL_VERSION_NONE = '';
    const SSL_VERSION_TLSv1_0 = 'TLSv1_0';
    const SSL_VERSION_TLSv1_1 = 'TLSv1_1';
    const SSL_VERSION_TLSv1_2 = 'TLSv1_2';

    /** @var int */
    private $connectionTimeout = 0;

    /** @var int */
    private $responseTimeout = 0;

    /** @var string */
    private $proxyHost = '';

    /** @var int */
    private $proxyPort = 0;

    /** @var int */
    private $maxRedirectCount = 0;

    /** @var string */
    private $userAgent = 'Php/HttpTransport';

    /** @var int */
    private $httpAuthType = HttpTransportAuthType::NONE;

    /** @var string */
    private $httpAuth = '';

    /** @var bool */
    private $enableCompress = true;

    /** @var string */
    private $sslVersion = self::SSL_VERSION_NONE;

    /** @var bool */
    private $verifyHost = false;

    /** @var bool */
    private $verifyPeer = false;

    public function getConnectionTimeout(): int
    {
        return $this->connectionTimeout;
    }

    public function setConnectionTimeout(int $connectionTimeout): void
    {
        $this->connectionTimeout = $connectionTimeout;
    }

    public function getResponseTimeout(): int
    {
        return $this->responseTimeout;
    }

    public function setResponseTimeout(int $timeout): void
    {
        $this->responseTimeout = $timeout;
    }

    public function getProxyHost(): string
    {
        return $this->proxyHost;
    }

    public function setProxyHost(string $proxyHost): void
    {
        $this->proxyHost = $proxyHost;
    }

    public function getProxyPort(): int
    {
        return $this->proxyPort;
    }

    public function setProxyPort(int $proxyPort): void
    {
        $this->proxyPort = $proxyPort;
    }

    public function getMaxRedirectCount(): int
    {
        return $this->maxRedirectCount;
    }

    public function setMaxRedirectCount(int $maxRedirectCount): void
    {
        $this->maxRedirectCount = $maxRedirectCount;
    }

    public function getUserAgent(): string
    {
        return $this->userAgent;
    }

    public function setUserAgent(string $userAgent): void
    {
        $this->userAgent = $userAgent;
    }

    public function getHttpAuthType(): int
    {
        return $this->httpAuthType;
    }

    public function setHttpAuthType(int $httpAuthType): void
    {
        $this->httpAuthType = $httpAuthType;
    }

    public function getHttpAuth(): string
    {
        return $this->httpAuth;
    }

    public function setHttpAuth(string $httpAuth): void
    {
        $this->httpAuth = $httpAuth;
    }

    public function isEnableCompress(): bool
    {
        return $this->enableCompress;
    }

    public function setEnableCompress(bool $enableCompress): void
    {
        $this->enableCompress = $enableCompress;
    }

    public function getSslVersion(): string
    {
        return $this->sslVersion;
    }

    public function setSslVersion(string $sslVersion): void
    {
        $this->sslVersion = $sslVersion;
    }

    public function isVerifyHost(): bool
    {
        return $this->verifyHost;
    }

    public function setVerifyHost(bool $verifyHost): void
    {
        $this->verifyHost = $verifyHost;
    }

    public function isVerifyPeer(): bool
    {
        return $this->verifyPeer;
    }

    public function setVerifyPeer(bool $verifyPeer): void
    {
        $this->verifyPeer = $verifyPeer;
    }
}