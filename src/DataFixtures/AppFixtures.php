<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Prodotto;    

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $product = new Prodotto();
            $product->setName("Prodotto Uno");
            $product->setdescription("Descrizione");
            $product->setSize(100);

         $manager->persist($product);
            
         $product = new Prodotto();
            $product->setName("Prodotto Due");
            $product->setdescription("Descrizione");            
            $product->setSize(200);
 
         $manager->persist($product);

        $product = new Prodotto();
            $product->setName("Prodotto Tre");
            $product->setdescription("Descrizione");
            $product->setSize(100);
        
         $manager->persist($product);
         

        $manager->flush();
    }
}
