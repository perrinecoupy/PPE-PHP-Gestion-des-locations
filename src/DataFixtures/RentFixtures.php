<?php

namespace App\DataFixtures;

use App\Entity\Rent;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class RentFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        for ($i = 0; $i < 6; $i++)
        {
            $rent = new Rent();
            $rent->setInventoryFile("fichier.pdf");
            $timestamp = mt_rand(1, time());
            $date = new \DateTime();
            $date->setTimestamp($timestamp);
            $rent->setArrivalDate($date);
            $rent->setDepartureDate($date);
            $rent->setTenantComments("Lorem Ipsum");
            $rent->setTenantSignature("arthur");
            $rent->setTenantValidatedAt("Today");
            $rent->setRepresentativeComments("Lorem Ipsum");
            $rent->setRepresentativeSignature("perrine");
            $rent->setRepresentativeValidatedAt($date);
            //$rent->setTenantId($this->getReference('user'.rand(1,6)));
            //$rent->setResidenceId($this->getReference('user'.rand(1,6)));
            //$this->addReference('residence'.$i, $residence);

            $manager->persist($rent);
        }

        $manager->flush();
    }
}
