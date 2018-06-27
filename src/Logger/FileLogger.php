<?php
/**
 * Created by PhpStorm.
 * User: AerTicket
 * Date: 13/06/2018
 * Time: 10:06
 */

namespace App\Logger;


use Symfony\Component\EventDispatcher\EventDispatcherInterface;

/** @noinspection PhpUndefinedClassInspection */

/**
 * Basic FileLogger class
 * Class Logger
 * @package App\Logger
 */
abstract class FileLogger implements LoggerInterface, FileLoggerInterface
{
    /***  Log file extension*/
    const EXTENSION = 'log';
    /*** Log file prefix*/
    const PREFIX = '';
    /*** Log Path*/
    const LOG_PATH = '../var/log/';
    /*** Emergency log level*/
    const EMERGENCY_LEVEL = 'emergency';
    /*** Alert log level*/
    const ALERT_LEVEL = 'alert';
    /*** Critical log level*/
    const CRITICAL_LEVEL = 'critical';
    /*** Error log level*/
    const ERROR_LEVEL = 'error';
    /*** Warning log level*/
    const WARNING_LEVEL = 'warning';
    /*** Notice log level*/
    const NOTICE_LEVEL = 'notice';
    /*** Info log level*/
    const INFO_LEVEL = 'info';
    /*** Debug log level*/
    const DEBUG_LEVEL = 'debug';
    /* @var array $data log's container */
    private $data = [];
    /*** @var EventDispatcherInterface $eventDispatcher */
    private $eventDispatcher;
    /*** @var bool|resource $fileHandle Log File Handle */
    private $fileHandle;
    /*** @var LogMessageInterface $logMessage */
    private $logMessage;

    /**
     * FileLogger constructor.
     * @param EventDispatcherInterface $eventDispatcher
     * @param LogMessageInterface $logMessage
     */
    public function __construct(EventDispatcherInterface $eventDispatcher, LogMessageInterface $logMessage)

    {
        $this->logMessage = $logMessage;
        $this->eventDispatcher = $eventDispatcher;
        $this->createLogFile();
    }

    /**
     * Create Log File
     */
    private function createLogFile()
    {
        $fileName = $this->getFullFileName();
        $this->fileHandle = fopen(static::LOG_PATH . $fileName, 'c');
    }

    /**
     * Get generated full file name
     * @return string
     */
    private function getFullFileName()
    {
        $fileName = $this->getFileName();
        if (file_exists(static::LOG_PATH . $fileName . '.' . static::EXTENSION))
            return $this->getFullFileName() . '.' . static::EXTENSION;
        return $fileName . '.' . static::EXTENSION;
    }

    /**
     * Get filename
     * @return string
     */
    private function getFileName()
    {
        return static::PREFIX . '_' . uniqid(date('Y-m-d_H-i-s_'));
    }

    /**
     * Class destructor
     */
    public function __destruct()
    {
        if ($this->fileHandle) {
            fclose($this->fileHandle);
        }
    }

    /**
     * Emergency log
     * @param string $message
     * @param array $context
     */
    public function emergency($message, array $context = array()): void
    {
        $this->log($message, static::EMERGENCY_LEVEL, $context);
    }

    /**
     * Log
     * @param mixed $message
     * @param null $level
     * @param array $context
     */
    public function log($message, $level = null, array $context = array()): void
    {
        /** @var LogMessageInterface $logMessage */
        $logMessage = $this->logMessage::create($level, $message, $context);
        array_unshift($this->data, $logMessage);
        if ($this->fileHandle) {
            rewind($this->fileHandle);
            fwrite($this->fileHandle, $logMessage . "\n");
        }
    }

    /**
     * Alert log
     * @param string $message
     * @param array $context
     */
    public function alert($message, array $context = array()): void
    {
        $this->log($message, static::ALERT_LEVEL, $context);
    }

    /**
     * Critical log
     * @param string $message
     * @param array $context
     */
    public function critical($message, array $context = array()): void
    {
        $this->log($message, static::CRITICAL_LEVEL, $context);
    }

    /**
     * Error log
     * @param string $message
     * @param array $context
     */
    public function error($message, array $context = array()): void
    {
        $this->log($message, static::ERROR_LEVEL, $context);
    }

    /**
     * Warning log
     * @param string $message
     * @param array $context
     */
    public function warning($message, array $context = array()): void
    {
        $this->log($message, static::WARNING_LEVEL, $context);
    }

    /**
     * Notice log
     * @param string $message
     * @param array $context
     */
    public function notice($message, array $context = array()): void
    {
        $this->log($message, static::NOTICE_LEVEL, $context);
    }


    /**
     * Info log
     * @param string $message
     * @param array $context
     */
    public function info($message, array $context = array()): void
    {
        $this->log($message, static::INFO_LEVEL, $context);
    }


    /**
     * Debug log
     * @param string $message
     * @param array $context
     */
    public function debug($message, array $context = array()): void
    {
        $this->log($message, static::DEBUG_LEVEL, $context);
    }

    /**
     * Save log file
     */
    protected function save(): void
    {
        if ($this->fileHandle) {
            fflush($this->fileHandle);
        } else {
            $this->createLogFile();
            if (!empty($this->data)) {
                /** @var LogMessageInterface $logMessage */
                foreach ($this->data as $logMessage) {
                    fwrite($this->fileHandle, $logMessage . "\n");
                }
                fflush($this->fileHandle);
            }
        }
    }
}


