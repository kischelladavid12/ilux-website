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

Route::get('/home', function () {
    return view('welcome');
});

Route::get('/what-we-do', function () {
    return view('what-we-do');
});

Route::get('/about-us', function () {
    return view('about-us');
});

Route::get('/login', function () {
    return view('log-in');
});

Route::get('/register', function () {
    return view('regform');
});

Route::get('/offer', function () {
    return view('offer');
});

Route::get('/offer-instagram', function () {
    return view('offer-instagram');
});

Route::get('/offer-facebook', function () {
    return view('offer-facebook');
});

Route::get('/offer-twitter', function () {
    return view('offer-twitter');
});

Route::get('/offer-youtube', function () {
    return view('offer-youtube');
});

Route::get('/offer-tiktok', function () {
    return view('offer-tiktok');
});



//protected routes
Route::group(['middleware' => ['auth:sanctum']], function () {


    Route::get('/dashboard', function () {
        return view('home');
    });

    Route::get('/service-list', function () {
        return view('service-list');
    });

    Route::get('/order', function () {
        return view('order-view/order-form');
    });

    Route::post('order/form-submit', [App\Http\Controllers\TurboSMMController::class, 'addOrder']);
});
