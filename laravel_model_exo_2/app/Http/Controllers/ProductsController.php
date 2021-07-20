<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
class ProductsController extends Controller
{
    public function index() {
$tabTitle =["<span class='site-heading-upper text-primary mb-3'>A Free Bootstrap 4 Business Theme</span>"," <span class='site-heading-lower'>Business Casual</span>"];
    $footerContent = "<div class='container'>
      <p class='m-0 small'>Copyright &copy; Your Website 2019</p>
    </div>";
 
    $productContent = Product::all();
// $productContent   = (object)['span1'=>'Blended to Perfection','span2'=>'Coffees &amp; Teas','src1'=>'img/products-01.jpg','p1'=>"We take pride in our work, and it shows. Every time you order a beverage from us, we guarantee that it will be an experience worth having. Whether it's our world famous Venezuelan Cappuccino, a refreshing iced herbal tea, or something as simple as a cup of speciality sourced black coffee, you will be coming back for more.",'span3'=>'Delicious Treats, Good Eats','span4'=>'Bakery &amp; Kitchen','src2'=>'img/products-02.jpg','p2'=>"Our seasonal menu features delicious snacks, baked goods, and even full meals perfect for breakfast or lunchtime. We source our ingredients from local, oragnic farms whenever possible, alongside premium vendors for specialty goods.",'span5'=>'From Around the World','span6'=>'Bulk Speciality Blends','src3'=>'img/products-03.jpg','p3'=>"Travelling the world for the very best quality coffee is something take pride in. When you visit us, you'll always find new blends from around the world, mainly from regions in Central and South America. We sell our blends in smaller to large bulk quantities. Please visit us in person for more details."];

    return view('pages.products',compact('tabTitle','footerContent','productContent'));
}
}
