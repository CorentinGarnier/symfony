<?php

namespace App\DataFixtures;

use App\Entity\Game;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;

class GameFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $faker = Factory::create('fr_FR');
        for($i = 0; $i < 60; $i++) {
            $game = new Game();

            $game->setName($faker->text(25));
            $game->setDateAdd($faker->dateTimeBetween('-2 years', 'now'));
            $game->setDescription($faker->text(300));

            $manager->persist($game);

            $manager->flush();
        }
    }
}
