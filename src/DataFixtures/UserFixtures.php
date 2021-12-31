<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class UserFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        for ($i = 0; $i < 2; $i++)
        {
            $user = new User();
            $user->setRole("ROLE_OWNER");
            $user->setEmail('valentin.arthur1000@gmail.com');
            $user->setPassword('arthur16012001');
            $user->setIsVerified(1);

            $manager->persist($user);
        }

        $manager->flush();
    }
}
