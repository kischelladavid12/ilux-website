<?php

namespace App\Services;

use App\Services\TurboConnect;

class OrderStatus
{
    public function orderStatus($id) //get services list
    {
        $response = new TurboConnect();
        return $response->connect($data = [
            'key' => env('API_KEY'),
            'action' => 'status',
            'order' => $id
        ]);
    }
}
