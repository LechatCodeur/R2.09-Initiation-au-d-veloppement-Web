<?php

namespace App\Entity;

use App\Repository\VieNoteRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: VieNoteRepository::class)]
class VieNote
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?\DateTime $updateAt = null;

    #[ORM\ManyToOne(inversedBy: 'vieNotes')]
    private ?User $user = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUpdateAt(): ?\DateTime
    {
        return $this->updateAt;
    }

    public function setUpdateAt(\DateTime $updateAt): static
    {
        $this->updateAt = $updateAt;

        return $this;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): static
    {
        $this->user = $user;

        return $this;
    }
}
