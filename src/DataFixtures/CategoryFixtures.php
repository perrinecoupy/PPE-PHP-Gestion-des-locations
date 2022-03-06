<?php

namespace App\DataFixtures;

use App\Entity\Category;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class CategoryFixtures extends Fixture
{

    public function load(ObjectManager $manager)
    {
        for ($i = 1; $i < 6; $i++) { 
            $category = new Category();
            $category->setTitle('category '.$i);
            $this->addReference('category-'.$i, $category);
            $manager->persist($category);
        }
        $manager->flush();
    }
}
