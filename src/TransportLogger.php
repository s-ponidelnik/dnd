<?php
/**
 * Created by PhpStorm.
 * User: AerTicket
 * Date: 13/06/2018
 * Time: 12:02
 */
namespace App;

use App\Logger\FileLogger;
use Symfony\Component\HttpKernel\Event\PostResponseEvent;

/**
 * Class TransportLogger
 * @package App
 */
class TransportLogger extends FileLogger implements TransportLoggerInterface
{
    /**
     * File Name Prefix
     */
    const PREFIX = 'transport';

    /**
     * On kernel.terminate event
     * @param PostResponseEvent $event
     */
    public function onKernelTerminate(PostResponseEvent $event): void
    {
        /*
        $request = $event->getRequest();
        $response = $event->getResponse();
        */
        $this->save();
    }
}