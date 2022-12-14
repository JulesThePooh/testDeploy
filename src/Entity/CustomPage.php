<?php

namespace App\Entity;

use App\Repository\CustomPageRepository;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: CustomPageRepository::class)]
class CustomPage
{
    #[ORM\Id, ORM\GeneratedValue, ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $title;

    #[ORM\Column(type: 'text')]
    private $content;

    #[ORM\Column(type: 'integer')]
    private $status;

    #[ORM\Column(type: 'string', length: 255)]
    private $accessLink;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getContent(): ?string
    {
        return $this->content;
    }

    public function setContent(string $content): self
    {
        $this->content = $content;

        return $this;
    }

    public function getStatus(): ?int
    {
        return $this->status;
    }

    public function setStatus($status): self
    {
        $this->status = $status;

        return $this;
    }

    public function getAccessLink(): ?string
    {
        return $this->accessLink;
    }

    public function setAccessLink($accessLink): self
    {
        $this->accessLink = $accessLink;

        return $this;
    }


}
