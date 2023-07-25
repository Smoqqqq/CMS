<?php

namespace App\DataFixtures;

use App\Entity\Configuration;
use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class AppFixtures extends Fixture
{
    public function __construct(private UserPasswordHasherInterface $hasher)
    {
    }
    public function load(ObjectManager $manager): void
    {
        $paul = new User();
        $paul->setEmail("paul.leflem@icloud.com");
        $password = "test";
        $hashedPassword = $this->hasher->hashPassword($paul, $password);
        $paul->setPassword($hashedPassword);
        $paul->setRoles(["ROLE_ADMIN"]);

        $configuration = new Configuration();

        $configuration->setCompanyName("BH Internet")
            ->setAddressLine1("7 avenue de l'orme à martin")
            ->setAddressCity("Évry-courcouronnes")
            ->setAddressZipcode("91000")
            ->setAddressCountry("France")
            ->setThemeColor("orange");

        $manager->persist($paul);
        $manager->persist($configuration);
        $manager->flush();
    }
}
