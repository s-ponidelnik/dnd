<?php

namespace App\Transport;

use App\TransportLogger;

abstract class Transport implements TransportInterface
{
    /** @var float */
    private $requestStartedAt = 0.0;

    /** @var float */
    private $responseReceivedAt = 0.0;

    protected $logger;

    public function getLastRequestTime(): ?\DateTime
    {
        if ($this->requestStartedAt) {
            return new \DateTime('@' . (int)$this->requestStartedAt);
        }

        return null;
    }

    public function __construct(TransportLogger $logger)
    {
        $this->logger = $logger;
    }

    public function getLastResponseTime(): ?\DateTime
    {
        if ($this->responseReceivedAt) {
            return new \DateTime('@' . (int)$this->responseReceivedAt);
        }

        return null;
    }

    public function getLastRequestExecutionTime(): float
    {
        if ($this->responseReceivedAt && $this->requestStartedAt && ($this->responseReceivedAt > $this->requestStartedAt)) {
            return $this->responseReceivedAt - $this->requestStartedAt;
        }

        return 0.0;
    }

    protected function doBeforeSend(): void
    {
        $this->requestStartedAt = microtime(true);
    }

    protected function doAfterSend(): void
    {
        $this->responseReceivedAt = microtime(true);
    }
}