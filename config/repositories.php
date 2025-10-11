<?php

use function DI\factory;

return [

    \Repository\Repository::class => DI\factory(function (\Doctrine\ORM\EntityManager $entityManager) {
        return $entityManager->getRepository('App\Entity\Status');
    })
];
