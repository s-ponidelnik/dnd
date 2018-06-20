<?php

namespace App\Rest\Controller;

use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\View\View;
use Symfony\Component\HttpFoundation\Request;

class RestIndexController extends FOSRestController
{

    /**
     * @param Request $request
     * @return View
     */
    public function getTest(
        Request $request
    ): View
    {
        $data = $request->getContent();
        return View::create($data);
    }
}