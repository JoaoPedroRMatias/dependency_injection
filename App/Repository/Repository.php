<?php
namespace Repository;

final class Repository 
{
    public function user(): object
    {
        $user = (object) [
            'Nome' => 'Joao',
            'Idade' => 24
        ];

        return $user;
    }
}
