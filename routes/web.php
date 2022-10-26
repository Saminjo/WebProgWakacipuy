<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\AuthController;
use \App\Http\Controllers\ProductController;
use \App\Http\Controllers\UserController;
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
    return view('home');
});
//login
Route::get('/login', [AuthController::class, 'loginpage']);
Route::post('/login', [AuthController::class, 'loginform']);

//register
Route::get('/register',[AuthController::class,'registerpage']);
Route::post('/register',[AuthController::class,'registerform']);

//logout
Route::get('/logout',[AuthController::class,'logout']);

//show product
Route::get('/show/product',[ProductController::class,'index'])->middleware('security');;

//view product
Route::get('/view/product',[ProductController::class,'viewProduct'])->middleware('security');

//insert
Route::get('/insert',[ProductController::class,'insertPage'])->middleware('security');
Route::post('/insert',[ProductController::class,'insertProduct'])->middleware('security');

//update
Route::post('/update/{id}',[ProductController::class,'updatePage'])->middleware('security');
Route::post('/update/item',[ProductController::class,'updateProduct'])->middleware('security');

//delete
Route::post('/delete/{id}',[ProductController::class,'deleteProduct'])->middleware('security');

//edit profile
Route::get('/edit/profile',[UserController::class,'editProfile'])->middleware('security');
Route::post('/edit/profile',[UserController::class,'edit'])->middleware('security');

//change password
Route::get('/change/password',[UserController::class,'changePassword'])->middleware('security');
Route::post('/change/password',[UserController::class,'change'])->middleware('security');
