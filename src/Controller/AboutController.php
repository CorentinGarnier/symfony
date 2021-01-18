<?php
namespace App\Controller;

use App\Entity\About;
use App\Repository\AboutRepository;
use Doctrine\Persistence\ObjectManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AboutController extends AbstractController {

    public function __construct(AboutRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * @Route("/About", name="about")
     * @return Response
     */
    public function index():Response {
        return $this->render('about/index.html.twig');

    }
}