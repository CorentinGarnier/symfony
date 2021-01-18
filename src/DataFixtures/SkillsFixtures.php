<?php

namespace App\DataFixtures;

use App\Entity\Skills;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class SkillsFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $skill1 = new Skills();
        $skill1->setName('Reactjs' )
            ->setScore(60);

        $manager->persist($skill1);

        $skill2 = new Skills();
        $skill2->setName('Symfony' )
            ->setScore(50);

        $manager->persist($skill2);

        $skill3 = new Skills();
        $skill3->setName('Flutter' )
            ->setScore(50);

        $manager->persist($skill3);

        $skill4 = new Skills();
        $skill4->setName('Javascript' )
            ->setScore(80);

        $manager->persist($skill4);

        $manager->flush();
    }
}
