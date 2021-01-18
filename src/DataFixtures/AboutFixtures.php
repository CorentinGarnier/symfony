<?php

namespace App\DataFixtures;

use App\Entity\About;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AboutFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $about = new About();
        $about->setFullname("Corentin Garnier" )
            ->setDescription("Web Developper Fullstack")
            ->setEmail("corentin.garnier@ynov.com")
            ->setCity("SANGUINET");

        $manager->persist($about);
        $manager->flush();

    }
}
