<?php

namespace App\Transport;

interface TransportInterface
{
    public function getLastRequestTime(): ?\DateTime;

    public function getLastResponseTime(): ?\DateTime;

    public function getLastRequestExecutionTime(): float;

    public function send(RequestInterface $request, ResponseInterface $response): void;
}