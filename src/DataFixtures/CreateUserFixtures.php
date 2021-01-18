<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class CreateUserFixtures extends Fixture
{
    private $passwordEncoder;

     public function __construct(UserPasswordEncoderInterface $passwordEncoder)
     {
         $this->passwordEncoder = $passwordEncoder;
     }

    public function load(ObjectManager $manager)
    {
        $user = new User();
        $user->setEmail('corentin.garnier@ynov.com')
            ->setRoles(array('ROLE_SUPER_ADMIN'))
            ->setPassword($this->passwordEncoder->encodePassword(
                         $user,
                         'azerty40'
            ));

        $manager->persist($user);
        $manager->flush();
    }
}
