<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;
class AboutController extends Controller
{
   public function index() {
$tabTitle =["<span class='site-heading-upper text-primary mb-3'>A Free Bootstrap 4 Business Theme</span>"," <span class='site-heading-lower'>Business Casual</span>"];
    $footerContent = "<div class='container'>
      <p class='m-0 small'>Copyright &copy; Your Website 2019</p>
    </div>";
    // $aboutContent = (object)['src'=>'img/about.jpg','span1'=>'Strong Coffee, Strong Roots','span2'=>'About Our Cafe','p1'=>'Founded in 1987 by the Hernandez brothers, our establishment has been serving up rich coffee sourced from artisan farmers in various regions of South and Central America. We are dedicated to travelling the world, finding the best coffee, and bringing back to you here in our cafe.','p2'=>'We guarantee that you will fall in <em>lust</em> with our decadent blends the moment you walk inside until you finish your last sip. Join us for your daily routine, an outing with friends, or simply just to enjoy some alone time.'];

    $aboutContent = About::all();

    return view('pages.about',compact('tabTitle','footerContent','aboutContent'));
}
}
