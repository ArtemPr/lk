<?php

namespace App\Service;

use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class UserService
{
    public function __construct(
        private readonly EntityManagerInterface $entityManager,
        private readonly UserPasswordHasherInterface $passwordHasher
    )
    {
    }

    public function createUser(
        string $userEmail,
        string $userPassword,
        array $userRole
    ): bool
    {
        $user = new User();

        $user->setEmail($userEmail);
        $user->setPassword($this->passwordHasher->hashPassword($user, $userPassword));
        $user->setRoles($userRole);
        $this->entityManager->persist($user);
        $this->entityManager->flush();
        $this->entityManager->clear();
        return true;
    }
}
