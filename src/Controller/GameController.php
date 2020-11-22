<?php

namespace App\Controller;

use App\Entity\Game;
use App\Repository\GameRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class GameController extends AbstractController
{
    /**
     * @Route("/game/{id}", name="game_details")
     */
    public function gameDetails(Game $game): Response
    {
        return $this->render('game/details.html.twig', [
            'game' => $game,
        ]);
    }
}
