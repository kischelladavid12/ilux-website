<?php

namespace App\Services;

use App\Services\TurboConnect;

class TurboServiceList
{
    public function services()
    {
        $connect_estab = new TurboConnect();
        return $connect_estab->connect($data = [
            'key' => env('API_KEY'),
            'action' => 'services'
        ]);
    }
}
