<?php
namespace Repository;

use User\User;

final class Repository 
{
    public function listUser(){
        $result = [
            "nome" => "joao",
        ];
        
        return $result;
    }
}
