<?php

namespace App\Rest\Response;

class RestErrorResponse extends RestResponse
{
    public function __construct()
    {
        $this->setSuccess(false);
    }
}