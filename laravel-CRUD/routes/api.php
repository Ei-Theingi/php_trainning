<?php

use App\Http\Controllers\ApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('datalist',[ApiController::class,'list']);
Route::post('datacreate',[ApiController::class,'store']);
Route::get('dataupdate/{id}',[ApiController::class,'update']);
Route::delete('datadelete/{id}',[ApiController::class,'delete']);