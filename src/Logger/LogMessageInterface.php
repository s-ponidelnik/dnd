<?php
namespace App\Logger;

/**
 * Interface LogMessageInterface
 * @package App\Logger
 */
interface LogMessageInterface
{
    /**
     * Create Log
     * @param string $level
     * @param string $message
     * @param array $context
     * @return mixed
     */
    public static function create(string $level, string $message, array $context = array());

    /**
     * Get Log
     * @return string
     */
    public function __toString(): string;
}