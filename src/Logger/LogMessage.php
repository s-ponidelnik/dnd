<?php
/**
 * Created by PhpStorm.
 * User: AerTicket
 * Date: 13/06/2018
 * Time: 12:03
 */

namespace App\Logger;

/**
 * Class LogMessage
 * @package App\Logger
 */
class LogMessage implements LogMessageInterface
{
    /**Date format*/
    const DATE_FORMAT = 'Y-m-d G:i:s.u';
    /* @var string Log Level */
    protected $level;
    /* @var string $message Log Message */
    protected $message;
    /* @var string $context Log Context */
    protected $context;
    /* @var string $date Log Date */
    protected $date;

    /**
     * Create Log
     * @param string $level
     * @param string $message
     * @param array $context
     * @return LogMessage
     */
    public static function create(string $level, string $message, array $context = array())
    {
        $logMessage = new self();
        $logMessage->setLevel($level);
        $logMessage->setMessage($message);
        $logMessage->setContext($context);
        $logMessage->setTimestamp();
        return $logMessage;
    }

    /**
     * Set Log level
     * @param string $level
     */
    public function setLevel(string $level): void
    {
        $this->level = $level;
    }

    /**
     * Set Log message
     * @param string $message
     */
    public function setMessage(string $message): void
    {
        $this->message = $message;
    }

    /**
     * Set Log context
     * @param array $context
     */
    public function setContext(array $context): void
    {
        $this->context = json_encode($context);
    }

    /**set current date with DATE_FORMAT*/
    protected function setTimestamp(): void
    {
        $date = new \DateTime();
        $this->date = $date->format(static::DATE_FORMAT);
    }

    /**
     * Get Log
     * @return string
     */
    public function __toString(): string
    {
        $stringMessage = '';
        if ($this->date)
            $stringMessage = $stringMessage . $this->date . ':';
        if ($this->level)
            $stringMessage = $stringMessage . '(' . $this->level . ') ';
        if ($this->message)
            $stringMessage = $stringMessage . $this->message . ' ' . $this->context;
        return $stringMessage;
    }
}