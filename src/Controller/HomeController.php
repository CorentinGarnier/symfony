<?php
namespace App\Controller;

use App\Entity\About;
use App\Repository\AboutRepository;
use App\Repository\ExperiencesRepository;
use App\Repository\SkillsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Component\Routing\Annotation\Route;
use Twig\Environment;

class HomeController extends AbstractController {

    /**
     * @Route("/", name="home", methods={"GET", "POST"})
     * @throws \Symfony\Component\Mailer\Exception\TransportExceptionInterface
     */
    public function index(AboutRepository $repository,
                          SkillsRepository $repositorySkills,
                          ExperiencesRepository $repositoryExperiences,
                          MailerInterface $mailer,
                          Request $request
    ):Response {

        $abouts = $repository->findAll();
        $about = $abouts[0];
        $skills = $repositorySkills->findAll();
        $experiences = $repositoryExperiences->findAll();

        if ($request->isMethod('POST')){
            $mail = $request->request->get('email');
            $content = $request->request->get('message');
            $email = (new Email())
                ->from('corentin.garnier40@gmail.com')
                ->to('corentin.garnier40@gmail.com')
                ->subject('Demande de contact')
                ->text('Nouvelle demande de contact de la part de '.$mail)
                ->html('<p>'.$content.'</p>');

            $mailer->send($email);

            $emailUser = (new Email())
                ->from('corentin.garnier40@gmail.com')
                ->to($mail)
                ->subject('Prise de contact')
                ->text("J'ai bien reçu votre message.");

            $mailer->send($emailUser);
        }




        return $this->render('pages/home.html.twig', ['about' => $about, 'experiences' => $experiences, 'skills' => $skills ]);

    }
}