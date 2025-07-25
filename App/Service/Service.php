<?php
namespace Service;

use DI\Attribute\Inject;
use Repository\Repository;

class Service {
    #[Inject]
    public Repository $repository;
    
    public function listRepository() 
    {
        return $this->repository->listUser();
    }
}