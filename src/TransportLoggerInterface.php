<?php

namespace App;

use Symfony\Component\HttpKernel\Event\PostResponseEvent;

/**
 * Interface TransportLoggerInterface
 * @package App
 */
interface TransportLoggerInterface
{
    /**
     * On kernel.terminate event
     * @param PostResponseEvent $event
     */
    public function onKernelTerminate(PostResponseEvent $event): void;
}