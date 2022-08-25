<?php

namespace App\Services;

use App\Services\TurboConnect;

class TurboBalance
{
    public function checkBal()
    {
        $connect_estab = new TurboConnect();
        return $connect_estab->connect($data = [
            'key' => env('API_KEY'),
            'action' => 'balance'
        ]);
    }
}
