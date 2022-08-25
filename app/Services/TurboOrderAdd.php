<?php

namespace App\Services;

use App\Services\TurboConnect;
use Illuminate\Support\Facades\Auth;
use App\Models\Order;

class TurboOrderAdd
{
    public function addOrder($request) //get services list
    {
        try {

            $query = array();

            foreach ($request->all() as $key => $value) {
                if ($key != '_token' && $key != 'submit' && $key != 'package_name' && $key != 'price') {
                    $query[$key] = $value;
                }
            }

            $post = array_merge(array(
                'key' => env('API_KEY'),
                'action' => 'add'
            ), $query);

            $connect_estab = new TurboConnect();
            $response = $connect_estab->connect($post);

            if (array_key_exists("error", $response)) {
                return response()->json(array_merge([
                    'status' => false,
                    'message' => 'Order Failed :(',
                ], $response), 500);
            } else {
                //For Initial Order Status Checking
                $orderCheck = new TurboOrderStatus();

                //Create New Record to Local Orders Database
                $isInsertSuccess = Order::create([
                    'user_id' => Auth::user()->id,
                    //'turbo_order_id' => $response->order,
                    'turbo_service_id' => $request->service,
                    'package_name' => $request->package_name,
                    'price' => $request->price,
                    //'status' => $orderCheck->orderStatus($response->order)->status
                ]);
                if ($isInsertSuccess) {
                    echo '<h1>Order Success!</h1>';
                    return $response;
                } else {
                    return response()->json([
                        'status' => false,
                        'message' => 'Failed to record in local database :(',
                    ], 500);
                }
            }
        } catch (\Throwable $th) {
            return response()->json([
                'status' => false,
                'message' => $th->getMessage(),
            ], 500);
        }
    }
}
