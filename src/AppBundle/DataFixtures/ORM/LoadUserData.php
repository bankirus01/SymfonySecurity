<?php

namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\User;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoder;


class LoadUserData implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $user = new User();
        $user->setUsername('admin');

        $password = password_hash('admin', PASSWORD_BCRYPT);

        $user->setPassword($password);
        $user->setEmail('admin@admin.ru');

        $manager->persist($user);
        $manager->flush();
    }
}