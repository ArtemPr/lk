<?php

namespace App\Controller;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class BaseController extends AbstractController
{
    public function __construct(
        protected readonly EntityManagerInterface $entityManager
    )
    {
    }
}
