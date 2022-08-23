<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::middleware('auth:sanctum')->get('/home', function () {
    return view('welcome');
});

Route::middleware('auth:sanctum')->get('/dashboard', function () {
    return view('home');
});

Route::middleware('auth:sanctum')->get('/service-list', function () {
    return view('service-list');
});

Route::middleware('auth:sanctum')->get('/order', function () {
    return view('order-view/order-form');
});

Route::get('/what-we-do', function () {
    return view('what-we-do');
});

Route::get('/about-us', function () {
    return view('about-us');
});



Route::middleware('auth:sanctum')->post('order/form-submit', [App\Http\Controllers\TurboSMMController::class, 'addOrder']);
