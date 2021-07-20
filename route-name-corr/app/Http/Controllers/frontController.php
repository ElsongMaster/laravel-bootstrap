<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class frontController extends Controller
{
public function index() {
    $fronttab=[
        (object)["nom"=>"Vegeta","fonction"=>"frontend", "src"=>"vegeta.jpg"],
        (object)["nom"=>"Broly","fonction"=>"frontend", "src"=>"vegeta.jpg"],
        (object)["nom"=>"sangohan","fonction"=>"frontend", "src"=>"vegeta.jpg"],
        (object)["nom"=>"sangoku","fonction"=>"frontend", "src"=>"vegeta.jpg"],
        (object)["nom"=>"Ali","fonction"=>"frontend", "src"=>"vegeta.jpg"],
    ];
    return view('team/web/dev/front',compact('fronttab'));
}
}
