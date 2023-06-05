<?php

namespace App\Entity;

use App\Repository\FinancialRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: FinancialRepository::class)]
class Financial
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    public function getId(): ?int
    {
        return $this->id;
    }
}
