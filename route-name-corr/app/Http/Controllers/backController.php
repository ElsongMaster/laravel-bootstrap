<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class backController extends Controller
{
    public function index() {
    $backtab=[
        (object)["nom"=>"seif","fonction"=>"backend", "src"=>"vegeta.jpg"],
        (object)["nom"=>"elvis","fonction"=>"backend", "src"=>"vegeta.jpg"],
        (object)["nom"=>"kevin","fonction"=>"backend", "src"=>"vegeta.jpg"],
        (object)["nom"=>"chris","fonction"=>"backend", "src"=>"vegeta.jpg"],
        
    ];
    return view('team/web/dev/back',compact('backtab'));
}
}
