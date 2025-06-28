<?php

namespace App\DataFixtures;

use App\Entity\Product;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);

        for ($i = 1; $i <= 5; $i++) {
            $product = new Product();
            $product->setName("Produit $i");
            $product->setDescription("Description du produit $i");
            $product->setPrice(mt_rand(10, 100));
            $product->setImage("https://picsum.photos/200");

            $manager->persist($product);
        }

        $manager->flush();
    }
}
