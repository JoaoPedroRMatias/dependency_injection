<?php
namespace Repository;

use User\User;

final class Repository 
{
    public function getUser(): array
    {
        try {
            $user = new User();
            $user->getName();
            return $user->toArray();

        } catch (\Exception $exception) {
            throw new \Exception($exception->getMessage());

        }
    }

    public function postUser($data)
    {
        try {
            $user = new User();
            $user->setName($data["name"]);
            
            return $user->toArray();

        } catch (\Exception $exception) {
            throw new \Exception($exception->getMessage());
        }
    }
}
