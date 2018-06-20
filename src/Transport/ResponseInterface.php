<?php

namespace App\Transport;

interface ResponseInterface
{
    public function getStatusCode(): int;
    public function getStatusMessage(): string;
    public function getHeaders(): array;
    public function getBody(): string;
}