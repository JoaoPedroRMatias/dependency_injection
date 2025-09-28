<?php
namespace Service;

use DI\Attribute\Inject;
use Repository\Repository;

class StatusService 
{
    #[Inject]
    public Repository $repository;
    
    public function getRepository() 
    {
        return $this->repository;
    }
}