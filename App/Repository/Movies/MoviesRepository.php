<?php
namespace App\Repository\Movies;

use Doctrine\ORM\EntityRepository;

final class MoviesRepository extends EntityRepository
{
    public function hash()
    {
        try {
            $qb = $this->getEntityManager()->createQueryBuilder()
                ->select('m')->from('App\Entity\Movies\Movies', 'm');

            return $qb->getQuery()->getSingleResult()->toArray();

        } catch (\Exception $exception) {
            throw new \Exception($exception->getMessage());
        }
    }
}
