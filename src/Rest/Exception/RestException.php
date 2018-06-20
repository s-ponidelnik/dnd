<?php

namespace App\Rest\Exception;

use Symfony\Component\HttpFoundation\Response;

class RestException extends \Exception
{
    const STATUS_CODE = Response::HTTP_INTERNAL_SERVER_ERROR;
    const MESSAGE = 'Technical error.';

    public function __construct(\Throwable $previous = null)
    {
        parent::__construct(static::MESSAGE, static::STATUS_CODE, $previous);
    }

    public function getRestCode(): string
    {
        return '';
    }
}