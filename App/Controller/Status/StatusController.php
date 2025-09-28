<?php
namespace Controller\Status;

use Controller\Controller;

class StatusController extends Controller
{
    public function get($request, $response){        
        $result = $this->statusService->getRepository()->status();
        
        return $this->success($response, $result);

    }
}