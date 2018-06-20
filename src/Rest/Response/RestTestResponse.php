<?php

namespace App\Rest\Response;

use JMS\Serializer\Annotation\Type;

class RestTestResponse extends RestResponse
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