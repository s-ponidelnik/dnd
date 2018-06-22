<?php

namespace App\Transport\Http;

use App\Transport\ResponseInterface;

class HttpTransportResponse implements ResponseInterface
{
    const STATUS_UNKNOWN = 0;
    const STATUS_OK = 200;
    const STATUS_NO_CONTENT = 204;
    const STATUS_SERVER_ERROR = 500;

    const CONTENT_TYPE_APPLICATION_XML = 'application/xml';
    const CONTENT_TYPE_APPLICATION_JSON = 'application/json';
    const CONTENT_TYPE_APPLICATION_PDF = 'application/pdf';

    const CONTENT_DISPOSITION_PDF = 'attachment; filename="data"';

    const HEADER_NAME_CONTENT_TYPE = 'Content-Type';
    const HEADER_NAME_CONTENT_DISPOSITION = 'Content-Disposition';

    /** @var int */
    private $statusCode = self::STATUS_UNKNOWN;

    /** @var string */
    private $statusMessage = '';

    /** @var string */
    private $httpVersion = '';

    /** @var array */
    private $headers = [];

    /** @var string */
    private $body = '';

    public function getStatusMessage(): string
    {
        return $this->statusMessage;
    }

    public function setStatusMessage(string $statusMessage): void
    {
        $this->statusMessage = $statusMessage;
    }

    public function isStatusCodeOk(): bool
    {
        return $this->getStatusCode() === self::STATUS_OK;
    }

    public function getStatusCode(): int
    {
        return $this->statusCode;
    }

    public function setStatusCode(int $statusCode): void
    {
        $this->statusCode = $statusCode;
    }

    public function isStatusCodeError(): bool
    {
        return $this->getStatusCode() >= 400;
    }

    public function getHttpVersion(): string
    {
        return $this->httpVersion;
    }

    public function setHttpVersion(string $httpVersion): void
    {
        $this->httpVersion = $httpVersion;
    }

    public function getHeaders(): array
    {
        return $this->headers;
    }

    public function setHeaders(array $headers): void
    {
        $this->headers = $headers;
    }

    public function getContentType(): ?string
    {
        $headers = $this->getHeader(self::HEADER_NAME_CONTENT_TYPE);

        return $headers ? reset($headers) : null;
    }

    public function getHeader(?string $headerName): ?array
    {
        return $this->headers[$headerName] ?? null;
    }

    public function getContentDisposition(): ?string
    {
        $headers = $this->getHeader(self::HEADER_NAME_CONTENT_DISPOSITION);

        return $headers ? reset($headers) : null;
    }

    public function getBody(): string
    {
        return $this->body;
    }

    public function setBody(string $body): void
    {
        $this->body = $body;
    }
}