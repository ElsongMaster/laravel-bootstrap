<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\indexController;
use  App\Http\Controllers\classesController;
use  App\Http\Controllers\usersController;
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

Route::get('/template/index',[indexController::class,'index'])->name('index');


Route::get('/pages/classes',[classesController::class,'index'])->name('classes');

Route::get('/pages/users',[usersController::class,'index'])->name('users');