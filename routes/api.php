<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MpesaController;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('v1/access/token', [MpesaController::class, 'generateAccessToken']);
//Route::post('v1/access/token', 'MpesaController@generateAccessToken');

Route::get('v1/eclothes/stk/push', [MpesaController::class, 'customerMpesaSTKPush'])->name('payment');

Route::get('/test',function(){
    return "ok"; 
});