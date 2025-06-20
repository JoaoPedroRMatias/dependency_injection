<?php
namespace Repository;

use User\User;

final class Repository 
{
    public function user(): array
    {
        try {
            $user = new User();
            $user->setName("joao");

            return $user->toArray();

        } catch (\Exception $exception) {
            throw new \Exception($exception->getMessage());

        }
    }
}
