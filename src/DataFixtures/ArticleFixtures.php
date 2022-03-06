<?php

namespace App\DataFixtures;

use App\Entity\Article;
use App\DataFixtures\AuthorFixtures;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;

class ArticleFixtures extends Fixture implements DependentFixtureInterface
{

    public function load(ObjectManager $manager)
    {
        for ($i = 1; $i < 6; $i++) {
            $article = new Article();
            $article->setTitle('article '.$i);
            $article->setContent('contenu '.$i);
            $article->setResume('résumé '.$i);
            // Générer une date aléatoire de 1970 à aujourd'hui
            $timestamp = mt_rand(1, time());
            $date = new \DateTime();
            $date->setTimestamp($timestamp);
            $article->setDate($date);
            $article->setAuthor($this->getReference('author-'.rand(1, 5)));
            $countCategory = rand(1, 6);
            if ($countCategory > 0) {
                for ($j=1; $j < $countCategory; $j++) { 
                    $article->addCategory($this->getReference('category-'.$j));
                }
            }
            $this->addReference('article-'.$i, $article);
            $manager->persist($article);
        }
        $manager->flush();
    }

    public function getDependencies(): array
    {
        return [
            AuthorFixtures::class,
            CategoryFixtures::class,
        ];
    }
}
