<?php
namespace Controller\Movies;

use Controller\Controller;
use Exception;

class MoviesController extends Controller
{
    public function get($request, $response){
        try {
            $data = $this->moviesService->getRepository()->hash();

            return $this->success($response, $data);

        } catch (Exception $e) {
            return $e->getMessage();

        }
    }

    public function status($request, $response){
        try {
            return $this->success($response, ['status' => true]);

        } catch (Exception $e) {
            return $e->getMessage();

        }
    }

}