<?php

namespace App\Entity;

use App\Entity\EntityBase;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'ts_status')]
#[ORM\Entity(repositoryClass:\Repository\Repository::class)]
class Status extends EntityBase
{
    #[ORM\Column(type: 'text')]
    protected $texto;

    public function toArray()
    {
        return [
            'status' => $this->getStatus(),
        ];
    }

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->texto;
    }

    /**
     * @param mixed $texto
     */
    public function setStatus($texto): void
    {
        $this->texto = $texto;
    }
}
