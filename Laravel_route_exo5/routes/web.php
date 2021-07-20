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
    return view('pages.home');
});


Route::get('/contact/sav', function () {
    return view('pages.infos.contact.sav');
})->name('sav');


Route::get('/contact/partenariat', function () {
    return view('pages.infos.contact.partenariat');
})->name('partenariat');

Route::get('/contact/info', function () {
    return view('pages.infos.contact.info');
})->name('info');


Route::get('/team/front', function () {

    
     $worker1 = (object) ['nom' =>'Els','fonction'=>'manager','chemin'=>'img/hacker-1811568_640.png'];
    $worker2 = (object) ['nom' =>'Degun','fonction'=>'Dev Senior','chemin'=>'img/code-707069_640.jpg'];
    $worker3 = (object) ['nom' =>'MadWorker','fonction'=>'Dev Junior','chemin'=>'img/anatomy-1751201_640.png'];
    $worker4 = (object) ['nom' =>'Majin Bu','fonction'=>'UI/UX Designer','chemin'=>'img/hack-813290_640.jpg'];
        $worker5 = (object) ['nom' =>'Black Panther','fonction'=>'Big Boss','chemin'=>'img/poly-3259233_640.jpg'];
    $front = [$worker1,$worker2,$worker3,$worker4,$worker5];
    return view('pages.team.web.frontend',compact('front'));
})->name('front');


Route::get('/team/back', function () {
     $worker1 = (object) ['nom' =>'Mr Robot','fonction'=>'manager','chemin'=>'img/hacker-3342696_640.jpg'];
    $worker2 = (object) ['nom' =>'Sayan 2','fonction'=>'Dev Senior','chemin'=>'img/hacker-2883632_640.jpg'];
    $worker3 = (object) ['nom' =>'Picolo','fonction'=>'Dev junior','chemin'=>'img/mask-1587566_640.png'];
    $worker4 = (object) ['nom' =>'Black Mamba','fonction'=>'UI/UX Designer','chemin'=>'img/online-troll-5268149_640.jpg'];
    $back = [$worker1,$worker2,$worker3,$worker4];
    return view('pages.team.web.backend',compact('back'));
})->name('back');

