<?php
namespace Repository;

use App\Entity\Status;
use Doctrine\ORM\AbstractQuery;
use Doctrine\ORM\EntityRepository;

final class Repository extends EntityRepository
{
    public function status()
    {
        try {
            $rejection = new Status();
            $rejection->setStatus("TesteMaluquete");

            $this->getEntityManager()->persist($rejection);
            $this->getEntityManager()->flush();
            return $rejection->toArray();

        } catch (\Exception $exception) {
            throw new \Exception($exception->getMessage());
        }
    }
}
