<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EducationController {

    /**
     * @Route("/Education", name="education")
     * @return Response
     */
    public function index() {
        return new Response("Mon éducation");

    }
}