<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class UserFixtures extends Fixture
{

    public function load(ObjectManager $manager)
    {
        $user = new User();
        $user->setEmail('valentin.arthur1000@gmail.com');
        $user->setRoles(["ROLE_ADMIN"]);
        $user->setPassword('arthurvalentim');
        $manager->persist($user);
        $manager->flush();
    }
}
