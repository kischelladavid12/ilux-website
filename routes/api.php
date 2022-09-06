<?php


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Auth\Access\Gate;
use App\Http\Controllers\TurboSMMController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\WalletController;
use App\Http\Controllers\AdminPanelController;
use App\Http\Controllers\OrderController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


//public routes
Route::post('/auth/register', [AuthController::class, 'register'])->name("/auth/register");
Route::post('/auth/login', [AuthController::class, 'login']);
Route::get('/auth/logout', [AuthController::class, 'logout']);


//protected routes
Route::group(['middleware' => ['auth:sanctum']], function () {
    //user routes
    Route::group([
        'prefix' => 'user',
        'as' => 'user.'
    ], function () {
        Route::get('/user', function (Request $request) {
            return $request->user();
        });
        Route::post('balance', [WalletController::class, 'showBalance']);
        Route::post('order-status/{id}', [TurboSMMController::class, 'orderStatus']);
        Route::post('new-order', [OrderController::class, 'process']);
    });


    //admin routes
    Route::group([
        'prefix' => 'admin',
        'middleware' => 'is_admin',
        'as' => 'admin.'
    ], function () {
        Route::post('add-bal', [WalletController::class, 'add']);
        Route::post('deduct-bal', [WalletController::class, 'deduct']);
        Route::post('turbo-services', [TurboSMMController::class, 'serviceList']);
        Route::post('turbo-balance', [TurboSMMController::class, 'balance']);

        Route::post('create-service', [AdminPanelController::class, 'createService']);
        Route::post('update-turbo-service-id', [AdminPanelController::class, 'updateTServID']);
        Route::post('update-service-price', [AdminPanelController::class, 'updatePrice']);
    });
});
