<?php

namespace App\Rest\Controller;

use App\Core\Entity\Core\Source;
use FOS\RestBundle\Controller\Annotations as Rest;
use FOS\RestBundle\Controller\FOSRestController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

class RestIndexController extends FOSRestController
{


    /**
     * @Rest\GET("/source/all")
     * @param Request $request
     * @return JsonResponse
     */
    public function getAllSources(
        Request $request
    ): JsonResponse
    {
        $repository = $this->getDoctrine()->getRepository(Source::class);
        $data = new JsonResponse($repository->findAll());
        return $data;
    }

    /**
     * @Rest\GET("/source/official")
     * @param Request $request
     * @return JsonResponse
     */
    public function getOfficialSources(
        Request $request
    ): JsonResponse
    {
        $repository = $this->getDoctrine()->getRepository(Source::class);
        $data = new JsonResponse($repository->findAllOfficial());
        return $data;
    }

}