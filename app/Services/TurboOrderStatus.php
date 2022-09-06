<?php

namespace App\Services;

use App\Services\TurboConnect;

class TurboOrderStatus
{
    public function orderStatus($id)
    {
        $response = new TurboConnect();
        return $response->connect($data = [
            'key' => env('API_KEY'),
            'action' => 'status',
            'order' => $id
        ]);
    }
}
