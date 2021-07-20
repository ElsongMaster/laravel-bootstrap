<?php

use Illuminate\Support\Facades\Route;
 use App\Http\Controllers\IndexController ;
  use App\Http\Controllers\ProductsController;
 use App\Http\Controllers\ HomeController;
 use App\Http\Controllers\storeController ;
  use App\Http\Controllers\aboutController ;
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

 Route::get('/',[HomeController::class,'index'] );


Route::get('/index',[IndexController::class,'index']);


Route::get('/about',[AboutController::class,'index'] );

Route::get('/products',[ProductsController::class,'index'] );

Route::get('/store',[storeController::class,'index'] );
