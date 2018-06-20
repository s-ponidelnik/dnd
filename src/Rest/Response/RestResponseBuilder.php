<?php

namespace App\Rest\Response;

use App\Rest\Exception\RestException;
use FOS\RestBundle\View\View;
use JMS\Serializer\SerializerInterface;
use Symfony\Component\HttpFoundation\Response;

class RestResponseBuilder
{
    /** @var SerializerInterface */
    private $serializer;

    public function __construct(SerializerInterface $serializer)
    {
        $this->serializer = $serializer;
    }

    public function getSerializer(): SerializerInterface
    {
        return $this->serializer;
    }

    public function build(RestResponse $response, int $statusCode = null, array $headers = []): View
    {
        $data = $this->getSerializer()->serialize($response, 'json');
        if (!$statusCode) {
            $statusCode = $response->isSuccess() ? Response::HTTP_OK : RestException::STATUS_CODE;
        }

        return View::create($data, $statusCode, $headers);
    }
}