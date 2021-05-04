<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;

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

Route::get('/login', function () {
    return view('login');
});
Route::get('/logout',function(){
    Session::forget('user');
    return redirect('login');
});
// Route::view('/','login');
Route::post("/login",[UserController::class,'login']);
Route::get("/",[ProductController::class,'index']);
Route::get("details/{id}",[ProductController::class,'details']);
Route::get("search",[ProductController::class,'search']);
Route::post("details/add_to_cart",[ProductController::class,'addToCart']);
Route::get("CartList",[ProductController::class,'CartList']);
Route::get("removecart/{id}",[ProductController::class,'removecart']);
Route::get("ordernow",[ProductController::class,'ordernow']);
Route::post("orderplace",[ProductController::class,'orderPlace']);