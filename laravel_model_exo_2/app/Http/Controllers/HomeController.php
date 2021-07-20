<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Home;
class HomeController extends Controller
{
public function index() {
    $tabTitle =["<span class='site-heading-upper text-primary mb-3'>A Free Bootstrap 4 Business Theme</span>"," <span class='site-heading-lower'>Business Casual</span>"];
    $footerContent = "<div class='container'>
      <p class='m-0 small'>Copyright &copy; Your Website 2019</p>
    </div>";

    $homeContent = Home::all();
    // $homeContent = (object)['span1'=>'Fresh Coffee','span2'=>'Worth Drinking','span3'=>'Our Promise','span4'=>'To You','src1'=>'img/intro.jpg','p1'=>"Every cup of our quality artisan coffee starts with locally sourced, hand picked ingredients. Once you try it, our coffee will be a blissful addition to your everyday morning routine - we guarantee it!",'linkTxt'=>'Visit Us Today!','p2'=>'When you walk into our shop to start your day, we are dedicated to providing you with friendly service, a welcoming atmosphere, and above all else, excellent products made with the highest quality ingredients. If you are not satisfied, please let us know and we will do whatever we can to make things right!'];

    return view('pages.home',compact('tabTitle','footerContent','homeContent'));
}
}
