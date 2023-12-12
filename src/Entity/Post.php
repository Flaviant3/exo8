<?php

namespace App\Entity;

use App\Repository\PostRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PostRepository::class)]
class Post
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'posts')]
    private ?Auteur $Post = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPost(): ?Auteur
    {
        return $this->Post;
    }

    public function setPost(?Auteur $Post): static
    {
        $this->Post = $Post;

        return $this;
    }
}
