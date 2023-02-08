<?php

use App\Http\Controllers\BuyController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ProfileController;
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
    return view('home');
});

// Route::get('/register', function () {
//     return view('register');
// });
Route::get('/register',[RegisterController::class,'index']);
Route::POST('/register',[RegisterController::class,'create']);

Route::get('/login', [LoginController::class, 'index']);
Route::POST('/login', [LoginController::class, 'validasi']);




Route::get('/sucess', [ProductController::class, 'index']);
Route::get('/detail/{id}', [ProductController::class, 'detail']);


// Route::get('/cart', [CartController::class, 'index']);
// Route::post('/cart/', [CartController::class, 'buy']);

Route::get('/cart/{id}',[BuyController::class, 'index']);
Route::POST('/cart/{user_id}/{item_id}',[BuyController::class, 'buy']);


Route::get('/profile',[ProfileController::class, 'index']);
Route::POST('/profile',[ProfileController::class, 'updateData']);
