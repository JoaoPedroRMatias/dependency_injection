<?php
namespace Controller\User;

use Controller\Controller;

class UserController extends Controller
{
    public function get($request, $response){        
        $result = $this->service->listRepository();
        
        return $this->success($response, $result);

    }
}