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
        $user->setName('Valentim');
        $user->setFirstname('Arthur');
        $user->setAddress('1 Rue Avenue de la liberté');
        $user->setComplementAddress('20 ème étage');
        $user->setZipCode('75000');
        $user->setCity('Paris');
        $user->setPhone('0123456789');
        $manager->persist($user);
        $manager->flush();
    }
}
