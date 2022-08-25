<?php

namespace App\Services;

use GuzzleHttp\Client;
use Illuminate\Support\Facades\Http;

class TurboConnect
{
    public function connect($data)
    {
        //$client = new Client(['base_uri' => env('API_LINK')]);
        try {
            $url = env('API_LINK') . '?' . http_build_query($data);
            // echo $url;
            $response = Http::post($url);
            return json_decode($response, true);
        } catch (\GuzzleHttp\Exception\RequestException $e) {
            echo $e->getRequest()->getUri();
        }
    }
}
