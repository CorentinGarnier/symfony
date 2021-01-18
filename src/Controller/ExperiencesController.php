<?php
namespace App\Controller;

use App\Repository\ExperiencesRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ExperiencesController {

    public function __construct(ExperiencesRepository $repositoryExperiences)
    {
        $this->repository = $repositoryExperiences;
    }

    /**
     * @Route("/Experiences", name="experiences")
     * @return Response
     */
    public function index() {
        return new Response("Mon expérience");

    }
}