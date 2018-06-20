<?php

namespace App\Rest\Exception;

use Symfony\Component\HttpFoundation\Response;

class BadRequestRestException extends RestException
{
    const CODE = Response::HTTP_BAD_REQUEST;
    const MESSAGE = 'Bad request.';
}