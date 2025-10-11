<?php

namespace App\Entity\Movies;

use App\Entity\EntityBase;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'ts_movies')]
#[ORM\Entity(repositoryClass: \App\Repository\Movies\MoviesRepository::class)]
class Movies extends EntityBase
{
    #[ORM\Column(type: 'text')]
    protected $name;
    #[ORM\Column(type: 'text')]
    protected $description;
    #[ORM\Column(type: 'text')]
    protected $link;
    #[ORM\Column(type: 'text')]
    protected $thumb;

    public function toArray()
    {
        return [
            'Name' => $this->getName(),
            'Description' => $this->getDescription(),
            'Link' => $this->getLink(),
            'Thumb' => $this->getThumb()
        ];
    }

    /**
     * @return mixed
     */
    public function getLink()
    {
        return $this->link;
    }

    /**
     * @param mixed $link
     */
    public function setLink($link): void
    {
        $this->link = $link;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name): void
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description): void
    {
        $this->description = $description;
    }

    /**
     * @return mixed
     */
    public function getThumb()
    {
        return $this->thumb;
    }

    /**
     * @param mixed $thumb
     */
    public function setThumb($thumb): void
    {
        $this->thumb = $thumb;
    }
}
