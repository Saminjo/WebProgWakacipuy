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
    return view('home.home');
});
//login
Route::get('/login', [AuthController::class, 'loginpage']);
Route::post('/login', [AuthController::class, 'loginform']);

//register
Route::get('/register',[AuthController::class,'registerpage']);
Route::post('/register',[AuthController::class,'registerform']);

//logout
Route::get('/logout',[AuthController::class,'logout'])->middleware('security');

//show product
Route::get('/show/product',[ProductController::class,'index']);

//view product
Route::get('/view/product',[ProductController::class,'viewProduct']);

//detail product
Route::get('/product/detail/{id}',[ProductController::class,'detailproductpage']);
Route::post('/product/detail',[ProductController::class,'detailproductget']);

//edit profile
Route::get('/edit/profile',[UserController::class,'editProfile'])->middleware('security');
Route::post('/edit/profile',[UserController::class,'edit'])->middleware('security');

//change password
Route::get('/change/password',[UserController::class,'changePassword'])->middleware('security');
Route::post('/change/password',[UserController::class,'change'])->middleware('security');

//insert
Route::get('/insert',[ProductController::class,'insertPage'])->middleware('securityAdmin');
Route::post('/insert',[ProductController::class,'insertProduct'])->middleware('securityAdmin');

//update
Route::post('/update/{id}',[ProductController::class,'updatePage'])->middleware('securityAdmin');
Route::post('/product/update',[ProductController::class,'updateProduct'])->middleware('securityAdmin');

//delete
Route::post('/delete/{id}',[ProductController::class,'deleteProduct'])->middleware('securityAdmin');

//cart
Route::get('/view/cart',[ProductController::class,'ViewCart'])->middleware('securityUser');
Route::post('/cart',[ProductController::class,'Cart'])->middleware('securityUser');

//transaction
Route::get('/transaction/history',[ProductController::class,'Transaction'])->middleware('securityUser');
