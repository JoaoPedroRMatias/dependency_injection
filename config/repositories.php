<?php

return [

    \App\Repository\Movies\MoviesRepository::class => DI\factory(function (\Doctrine\ORM\EntityManager $entityManager) {
        return $entityManager->getRepository('App\Entity\Movies\Movies');
    })
];
