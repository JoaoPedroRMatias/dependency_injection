<?php

namespace Entity;

use Entity\EntityBase;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'ts_status')]
#[ORM\Entity]
class Status extends EntityBase
{
    #[ORM\Column(type: 'text')]
    protected $status;

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
        return $this->status;
    }

    /**
     * @param mixed $status
     */
    public function setStatus($status): void
    {
        $this->status = $status;
    }
}
