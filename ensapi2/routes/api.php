<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\Itemcontroller;

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

Route::controller(Itemcontroller::class)->group(function() {
    Route::get('/items','index'); //GET ÇAĞIRMAK
    Route::get('/item/detail/{id}','show');
    //ekleme silme güncelleme 
    Route::post('/item/add','store'); //POST GÖNDERMEK
    Route::post('/item/update/{id}','update');
    Route::post('/item/delete/{id}','destroy');
    //Route::delete('/item/delete/{id}','destroy');

});
