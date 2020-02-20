<?php

namespace App\DataFixtures;

use App\Entity\Categorie;
use App\Entity\Produit;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $epicerie = new Categorie();
        $epicerie->setName("Epicerie");
        $surgeles = new Categorie();
        $surgeles->setName("Surgeles");
        $boissons = new Categorie();
        $boissons->setName("Boissons");

        $manager->persist($epicerie);
        $manager->persist($surgeles);
        $manager->persist($boissons);

        $cafe = new Produit();
        $cafe->setName("cafe");
        $cafe->setPrice(2.1);
        $cafe->setCategorie($epicerie);

        $manager->flush();
    }
}
