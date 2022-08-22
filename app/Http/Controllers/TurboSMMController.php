<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

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



    public function addOrder(Request $request,)
    {
        $query = array();

        foreach ($request->all() as $key => $value) {
            if ($key != '_token' && $key != 'submit' && $key != 'package_name' && $key != 'price') {
                $query[$key] = $value;
            }
        }

        $post = array_merge(array(
            'key' => $this->api_key,
            'action' => 'add'
        ), $query);

        $response = $this->connect($post);

        //Data insertion to local orders database
        $orderCheck = $this->orderStatus($response->order);

        $turbo_order_id = $response->order;
        $turbo_service_id = $request->service;
        $package_name = $request->package_name;
        $price = $request->price;
        $status = $orderCheck->status;


        $isInsertSuccess = Order::insert([
            'user_id' => Auth::user()->id,
            'turbo_order_id' => $turbo_order_id,
            'turbo_service_id' => $turbo_service_id,
            'package_name' => $package_name,
            'price' => $price,
            'status' => $status
        ]);

        if ($isInsertSuccess) echo '<h1>Order Confirmed</h1>';
        else echo '<h1>Order Failed</h1>';

        return $response;
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
            $response = Http::post($url);
            return json_decode($response, true);
        } catch (\GuzzleHttp\Exception\RequestException $e) {
            echo $e->getRequest()->getUri();
        }
    }
}
