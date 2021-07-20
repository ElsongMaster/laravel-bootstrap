<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
public function index() {
    $tabTitle =["<span class='site-heading-upper text-primary mb-3'>A Free Bootstrap 4 Business Theme</span>"," <span class='site-heading-lower'>Business Casual</span>"];
    $footerContent = "<div class='container'>
      <p class='m-0 small'>Copyright &copy; Your Website 2019</p>
    </div>";
    return view('template.index',compact('tabTitle','footerContent'));
}
}
