<?php

namespace App\DataFixtures;

use App\Entity\Administrateur;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class AdminFixtures extends Fixture
{

    public function __construct(
        private UserPasswordHasherInterface $hasher,
    )
    {
    }

    public function load(ObjectManager $manager): void
    {

        $faker = Factory::create('fr_FR');

        $admin = new Administrateur();
        $admin->setUsername('Romaric');
        $admin->setRoles(['ROLE_USER', 'ROLE_ADMIN']);
        $admin->setPassword(
            $this->hasher->hashPassword($admin, 'Admin')
        );
        $manager->persist($admin);

        $manager->flush();
    }
}
