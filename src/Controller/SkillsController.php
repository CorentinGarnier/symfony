<?php
namespace App\Controller;

use App\Entity\Skills;
use App\Repository\SkillsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SkillsController extends AbstractController {


    /**
     * @Route("/Compétences", name="skills")
     * @return Response
     */
    public function index(): Response {
        return $this->render('skills/index.html.twig');

    }
}