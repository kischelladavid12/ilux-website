<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\TurboOrderAdd;
use App\Services\TurboServiceList;
use App\Services\TurboBalance;
use App\Services\TurboOrderStatus;

class TurboSMMController extends Controller
{

    public function serviceList()
    {
        $response = new TurboServiceList();
        return $response->services();
    }

    public function balance()
    {
        $response = new TurboBalance();
        return $response->checkBal();
    }

    public function addOrder(Request $request,)
    {
        $response = new TurboOrderAdd();
        return $response->addOrder($request);
    }

    public function orderStatus($id)
    {
        $response = new TurboOrderStatus();
        return $response->orderStatus($id);
    }
}
