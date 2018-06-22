<?php

namespace App\Rest\Request;

use JMS\Serializer\Annotation\Type;

class RestTestRequest extends RestRequest
{
    /**
     * @var string
     * @Type("string")
     */
    private $test;

    public function getTest()
    {
        return $this->test;
    }

    public function setTest($test)
    {
        $this->test = $test;
    }
}