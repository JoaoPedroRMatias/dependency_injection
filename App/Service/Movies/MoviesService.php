<?php
namespace App\Service\Movies;

use App\Repository\Movies\MoviesRepository;
use DI\Attribute\Inject;

class MoviesService
{
    #[Inject]
    public MoviesRepository $repository;
    
    public function getRepository() 
    {
        return $this->repository;
    }
}