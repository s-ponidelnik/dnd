<?php

namespace App\Rest\Response;

use JMS\Serializer\Annotation\Type;

abstract class RestResponse
{
    /**
     * @var bool
     * @Type("bool")
     */
    private $success = true;


    private $providerErrorList = [];

    public function isSuccess(): bool
    {
        return $this->success;
    }

    public function setSuccess(bool $success): void
    {
        $this->success = $success;
    }


    public function getProviderErrorList(): array
    {
        return $this->providerErrorList;
    }

    public function addProviderError($providerError): void
    {
        $this->providerErrorList[] = $providerError;
    }
}