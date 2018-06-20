<?php

namespace App\Transport\Http;

use App\Transport\TransportInterface;

interface HttpTransportInterface extends TransportInterface
{
    public function getLastRequest(): ?HttpTransportRequest;
    public function getLastResponse(): ?HttpTransportResponse;
}