<?php
namespace Repository;

use User\User;

final class Repository 
{
    public function user(): object
    {
        $user = new User();
        $user->setName("joao");

        $user = (object) [
            'Name' => $user->getName(),
        ];

        return $user;
    }
}
