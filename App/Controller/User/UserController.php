<?php
namespace Controller\User;

use Controller\Controller;

class UserController extends Controller
{
    public function get($request, $response){        
        $result = $this->service->getRepository()->getObj();
        
        return $this->success($response, $result);

    }
}