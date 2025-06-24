<?php
namespace Service;

use DI\Attribute\Inject;
use Repository\Repository;

class Service {
    #[Inject]
    public Repository $repository;
    
    public function getRepository(): Repository 
    {
        return $this->repository;
    }
}