<?php

namespace App\DataFixtures;

use App\Entity\Informations;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class HoursFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {

        $hours = new Informations();
        $hours->setLundi('11:00–15:00, 18:00–00:00');
        $hours->setMardi('11:00–15:00, 18:00–00:00');
        $hours->setMercredi('11:00–15:00, 18:00–00:00');
        $hours->setJeudi('11:00–15:00, 18:00–00:00');
        $hours->setVendredi('11:00–15:00, 18:00–00:00');
        $hours->setSamedi('11:00–15:00, 18:00–00:00');
        $hours->setDimanche('10:00–00:00');
        $manager->persist($hours);

        $manager->flush();
    }
}
