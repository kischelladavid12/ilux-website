<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Http;
use PDO;

class TurboSMMController extends Controller
{
    private $api_url = 'https://turbosmmservices.com/api/v2';

    private $api_key = '6629537ca795c0d31f2f1bd170d6628b';

    public function services() //get services list
    {
        return $this->connect($data = [
            'key' => $this->api_key,
            'action' => 'services'
        ]);
    }

    public function balance()
    {
        return $this->connect($data = [
            'key' => $this->api_key,
            'action' => 'balance'
        ]);
    }

    public function addOrder(Request $request)
    {
        $query = array();

        foreach ($request->all() as $key => $value) {
            if ($key != '_token' && $key != 'submit') {
                $query[$key] = $value;
            }
        }

        $post = array_merge(array(
            'key' => $this->api_key,
            'action' => 'add'
        ), $query);

        return $this->connect($post);
    }

    public function orderStatus($orderId)
    {
        return $this->connect($data = [
            'key' => $this->api_key,
            'action' => 'status',
            'order' => $orderId
        ]);
    }

    private function connect($data)
    {
        $client = new Client(['base_uri' => $this->api_url]);
        try {
            $url = $this->api_url . '?' . http_build_query($data);
            echo $url;
            //$response = Http::post($url);
            //return json_decode($response, true);
        } catch (\GuzzleHttp\Exception\RequestException $e) {
            echo $e->getRequest()->getUri();
        }
    }
}
