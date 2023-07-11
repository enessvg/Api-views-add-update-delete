<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Apicontroller;

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

Route::get('/getir', [Apicontroller::class,"apikullanicigetir"]);
Route::get('/urunekle', function () {
    return view('urunekle');
});
Route::get('/urunguncelle', function () {
    return view('urunguncelle');
});

