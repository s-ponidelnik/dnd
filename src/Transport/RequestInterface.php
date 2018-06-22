<?php

namespace App\Transport;

interface RequestInterface
{
    public function getUrl(): string;

    public function getMethod(): string;

    public function getHeaders(): array;

    public function getBody(): string;
}