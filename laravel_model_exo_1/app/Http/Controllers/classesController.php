<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class classesController extends Controller
{
 public function index() {
    return view('pages.classes');
}
}
