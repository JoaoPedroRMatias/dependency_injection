<?php
namespace Controller\User;

use Controller\Controller;

class UserController extends Controller
{
    public function get(){
        $result = $this->service->getRepository()->user();
        return $result ;
    }
}