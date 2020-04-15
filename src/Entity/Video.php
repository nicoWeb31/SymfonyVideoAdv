<?php

namespace App\Entity;

use Doctrine\ORM\Mapping\Index as Index;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\VideoRepository")
 * @ORM\Table(name="videos" ,indexes={@Index(name ="title_idx",columns={"title"})})
 */
class Video
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $title;

    /**
     * @ORM\Column(type="string", length=255 )
     */
    private $paht;

    /**
     * @ORM\Column(type="integer")
     */
    private $duration;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Category", inversedBy="videos")
     */
    private $category;

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

    public function getPaht(): ?string
    {
        return $this->paht;
    }

    public function setPaht(string $paht): self
    {
        $this->paht = $paht;

        return $this;
    }

    public function getDuration(): ?int
    {
        return $this->duration;
    }

    public function setDuration(int $duration): self
    {
        $this->duration = $duration;

        return $this;
    }

    public function getCategory(): ?Category
    {
        return $this->category;
    }

    public function setCategory(?Category $category): self
    {
        $this->category = $category;

        return $this;
    }
}
