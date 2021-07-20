<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SavController;
use App\Http\Controllers\infosController;
use App\Http\Controllers\PartenariatController;
use App\Http\Controllers\frontController;
use App\Http\Controllers\backController;

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

Route::get('/acceuil',function(){
    return view('accueil');
});

Route::get('/contact/sav', [SavController::class,'index'])->name('sav');

Route::get('/contact/infos', [infosController::class,'index'])->name('info');

Route::get('/contact/partenariat',[PartenariatController::class,'index'])->name('partenariat');

Route::get('/team/front', [frontController::class,'index'])->name('front');

Route::get('/team/back', [backController::class,'index'])->name('back');     
