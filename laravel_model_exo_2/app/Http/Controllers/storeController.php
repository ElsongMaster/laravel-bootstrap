<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Store;

class storeController extends Controller
{
    public function index() {
$tabTitle =["<span class='site-heading-upper text-primary mb-3'>A Free Bootstrap 4 Business Theme</span>"," <span class='site-heading-lower'>Business Casual</span>"];
    $footerContent = "<div class='container'>
      <p class='m-0 small'>Copyright &copy; Your Website 2019</p>
    </div>";
      $storeContent = Store::all();
   
    return view('pages.store',compact('tabTitle','footerContent','storeContent'));
}
}
