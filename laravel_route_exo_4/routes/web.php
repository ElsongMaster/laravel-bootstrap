<?php

use Illuminate\Support\Facades\Route;

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


Route::get('/dateDuJours', function () {
    return view('date');
});


Route::get('/Fruits/{tabFruits}', function ($tabFruits) {
    $tabFruits =["pommes","poires","fraises","cerises","bananes"];
    return view('fruit',compact('tabFruits'));
});

