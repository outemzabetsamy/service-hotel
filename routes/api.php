<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\HotelController;


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
Route::get('hotells',[HotelController::class,'index']);
Route::get('hotell/{id}',[HotelController::class,'show']);
Route::post('hotell',[HotelController::class,'store']);
Route::put('hotell/{id}',[HotelController::class,'update']);
Route::delete('hotell/{id}',[HotelController::class,'destroy']);
