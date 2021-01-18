<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ContactController {

    /**
     * @Route("/Contact", name="contact")
     * @return Response
     */
    public function index() {
        return new Response("Me contacter");

    }
}