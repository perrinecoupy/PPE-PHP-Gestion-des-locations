<?php

namespace App\DataFixtures;

use App\Entity\Residence;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class ResidenceFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        for ($i = 0; $i < 6; $i++)
        {
            $residence = new Residence();
            $residence->setName("Maison avec vue sur la tour Eiffel");
            $residence->setAddress("1 Rue de la Republique");
            $residence->setCity("Paris");
            $residence->setZipCode("75000");
            $residence->setCountry("France");
            $residence->setInventoryFile("fichier.pdf");

            $manager->persist($residence);
        }

        $manager->flush();
    }
}
