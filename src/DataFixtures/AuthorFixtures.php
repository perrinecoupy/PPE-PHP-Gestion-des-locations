<?php

namespace App\DataFixtures;

use App\Entity\Author;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AuthorFixtures extends Fixture
{

    public function load(ObjectManager $manager)
    {
        for ($i = 0; $i < 6; $i++) {
            $author = new Author();
            $author->setFirstname('Prénom Auteur '.($i + 1));
            $author->setLastname('Nom Auteur '.($i + 1));
            $this->addReference('author-'.$i, $author);
            $manager->persist($author);
        }
        $manager->flush();
    }
}
