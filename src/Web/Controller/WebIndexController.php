<?php

namespace App\Web\Controller;

use App\Core\Entity\Dice\DiceRoll;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

class WebIndexController extends Controller
{

    /**
     * @Route("/roll")
     * @param Request $request
     * @return JsonResponse
     * @throws \Exception
     */
    public function rollAction(Request $request): JsonResponse
    {
        $roll = $request->get('roll');
        return new JsonResponse(['result' => DiceRoll::rollDice($roll)]);
    }

    /**
     * @Route("/")
     * @return JsonResponse
     */
    public function indexAction(): JsonResponse
    {
        return new JsonResponse(['index' => true]);
    }
}