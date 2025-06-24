<?php

namespace Traits;

trait JsonTraits
{
    /**
     * @param $response
     * @param mixed $data
     * @param array|null $message
     * @param int $code
     * @return mixed
     */
    public function success($response,
                            mixed $data,
                            //?array $message = ['title' => '', 'description' => '', 'code' => ''],
                            int $code = 200): mixed
    {
        //$data = ['result' => $data, 'message' => $message, 'error' => false];
        $data = ['result' => $data, 'error' => false];
        $response->getBody()->write(json_encode($data));
        return $response
            ->withHeader('Content-Type', 'application/json')
            ->withStatus($code);
    }
}