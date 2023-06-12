<?php

namespace App\DataFixtures;

use App\Entity\Products;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;

class ProductsFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {

        $faker = Factory::create('fr_FR');

        for ($products = 1; $products <= 2; $products++){

            $products_plat = new products();
            $products_plat->setName('Plat');
            $products_plat->setDescription($faker->text);
            $products_plat->setPriceFOption($faker->randomFloat(2, 1.5, 50));
            $products_plat->setActive(true);
            $manager->persist($products_plat);

            $products_dessert = new products();
            $products_dessert->setName('Dessert');
            $products_dessert->setDescription($faker->text);
            $products_dessert->setPriceFOption($faker->randomFloat(2, 1.5, 50));
            $products_dessert->setActive(true);
            $manager->persist($products_dessert);

            $products_burger = new products();
            $products_burger->setName('Burger');
            $products_burger->setDescription($faker->text);
            $products_burger->setPriceFOption($faker->randomFloat(2, 1.5, 50));
            $products_burger->setActive(true);
            $manager->persist($products_burger);

            $products_salade = new products();
            $products_salade->setName('Salade');
            $products_salade->setDescription($faker->text);
            $products_salade->setPriceFOption($faker->randomFloat(2, 1.5, 50));
            $products_salade->setActive(true);
            $manager->persist($products_salade);

            $products_planche = new products();
            $products_planche->setName('Planche à Partager');
            $products_planche->setDescription($faker->text);
            $products_planche->setPriceFOption($faker->randomFloat(2, 1.5, 50));
            $products_planche->setActive(true);
            $manager->persist($products_planche);

            $products_menu = new products();
            $products_menu->setName('Menu');
            $products_menu->setDescription($faker->text);
            $products_menu->setPriceFOption($faker->randomFloat(2, 1.5, 50));
            $products_menu->setActive(true);
            $manager->persist($products_menu);

            $products_boisson_chaude = new products();
            $products_boisson_chaude->setName('Boisson Chaude');
            $products_boisson_chaude->setDescription($faker->text);
            $products_boisson_chaude->setPriceFOption($faker->randomFloat(2, 1.5, 50));
            $products_boisson_chaude->setPriceSOption($faker->randomFloat(2, 1.5, 50));
            $products_boisson_chaude->setPriceTOption($faker->randomFloat(2, 1.5, 50));
            $products_boisson_chaude->setFOption($faker->title);
            $products_boisson_chaude->setActiveFOption(true);
            $products_boisson_chaude->setSOption($faker->title);
            $products_boisson_chaude->setTOption($faker->title);
            $products_boisson_chaude->setPercentAlcool($faker->randomFloat(1, 5.5, 8));
            $products_boisson_chaude->setActive(true);
            $manager->persist($products_boisson_chaude);

            $products_boisson_soft = new products();
            $products_boisson_soft->setName('Boisson Soft');
            $products_boisson_soft->setDescription($faker->text);
            $products_boisson_soft->setPriceFOption($faker->randomFloat(2, 1.5, 50));
            $products_boisson_soft->setPriceSOption($faker->randomFloat(2, 1.5, 50));
            $products_boisson_soft->setPriceTOption($faker->randomFloat(2, 1.5, 50));
            $products_boisson_soft->setFOption($faker->title);
            $products_boisson_soft->setActiveFOption(true);
            $products_boisson_soft->setSOption($faker->title);
            $products_boisson_soft->setTOption($faker->title);
            $products_boisson_soft->setActive(true);
            $manager->persist($products_boisson_soft);

            $products_biere = new products();
            $products_biere->setName('Bière');
            $products_biere->setDescription($faker->text);
            $products_biere->setPriceFOption($faker->randomFloat(2, 1.5, 50));
            $products_biere->setPriceSOption($faker->randomFloat(2, 1.5, 50));
            $products_biere->setPriceTOption($faker->randomFloat(2, 1.5, 50));
            $products_biere->setFOption($faker->title);
            $products_biere->setActiveFOption(true);
            $products_biere->setSOption($faker->title);
            $products_biere->setTOption($faker->title);
            $products_biere->setPercentAlcool($faker->randomFloat(1, 5.5, 8));
            $products_biere->setActive(true);
            $manager->persist($products_biere);

            $products_vin = new products();
            $products_vin->setName('Vin');
            $products_vin->setDescription($faker->text);
            $products_vin->setPriceFOption($faker->randomFloat(2, 1.5, 50));
            $products_vin->setPriceSOption($faker->randomFloat(2, 1.5, 50));
            $products_vin->setPriceTOption($faker->randomFloat(2, 1.5, 50));
            $products_vin->setFOption($faker->title);
            $products_vin->setActiveFOption(true);
            $products_vin->setSOption($faker->title);
            $products_vin->setTOption($faker->title);
            $products_vin->setPercentAlcool($faker->randomFloat(1, 5.5, 8));
            $products_vin->setActive(true);
            $manager->persist($products_vin);

            $products_cocktail = new products();
            $products_cocktail->setName('Cocktail');
            $products_cocktail->setDescription($faker->text);
            $products_cocktail->setPriceFOption($faker->randomFloat(2, 1.5, 50));
            $products_cocktail->setPriceSOption($faker->randomFloat(2, 1.5, 50));
            $products_cocktail->setPriceTOption($faker->randomFloat(2, 1.5, 50));
            $products_cocktail->setFOption($faker->title);
            $products_cocktail->setActiveFOption(true);
            $products_cocktail->setSOption($faker->title);
            $products_cocktail->setTOption($faker->title);
            $products_cocktail->setPercentAlcool($faker->randomFloat(1, 5.5, 8));
            $products_cocktail->setActive(true);
            $manager->persist($products_cocktail);
        }

        $manager->flush();
    }
}
