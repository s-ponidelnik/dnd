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
     * @Route("/races")
     * @param Request $request
     * @return JsonResponse
     */
    public function getRaces(Request $request): JsonResponse
    {
        $races = [];//TODO::get races info
        return new JsonResponse(['result' => $races]);
    }

    /**
     * @Route("/classes")
     * @param Request $request
     * @return JsonResponse
     */
    public function getClasses(Request $request): JsonResponse
    {
        $classes = [];//TODO::get classes info
        return new JsonResponse(['result' => $classes]);
    }

    /**
     * @Route("/feats")
     * @param Request $request
     * @return JsonResponse
     */
    public function getFeats(Request $request): JsonResponse
    {
        $feats = [];//TODO::get feats info
        return new JsonResponse(['result' => $feats]);
    }

    /**
     * @Route("/character")
     * @param Request $request
     * @return JsonResponse
     */
    public function getCharacter(Request $request): JsonResponse
    {
        $character = [];
        return new JsonResponse(['result' => $character]);
    }

    /**
     * @Route("/spells")
     * @param Request $request
     * @return JsonResponse
     */
    public function getSpells(Request $request): JsonResponse
    {
        $spells = [];
        return new JsonResponse(['result' => $spells]);
    }

    /**
     * @Route("/character-backgrounds")
     * @param Request $request
     * @return JsonResponse
     */
    public function getCharacterBackgrounds(Request $request): JsonResponse
    {
        $characterBackgrounds = [];
        return new JsonResponse(['result' => $characterBackgrounds]);
    }

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