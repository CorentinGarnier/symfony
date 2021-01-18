<?php

namespace App\DataFixtures;

use App\Entity\Experiences;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class ExperiencesFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $experiences1 = new Experiences();
        $experiences1->setFormation("Ynov Campus Bordeaux");
        $manager->persist($experiences1);

        $experiences2 = new Experiences();
        $experiences2->setFormation("BTS SNIR Option Informatique et Réseaux" );
        $manager->persist($experiences2);

        $experiences3 = new Experiences();
        $experiences3->setFormation("Baccalauréat STI2D Option SIN" );
        $manager->persist($experiences3);

        $manager->flush();
    }
}
