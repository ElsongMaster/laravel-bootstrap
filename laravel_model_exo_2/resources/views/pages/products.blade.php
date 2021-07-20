@extends('template/index')



@section('content')
@foreach ($productContent as $item )
  
<section class="page-section">
   <div class="container">
     <div class="product-item">
       <div class="product-item-title d-flex">
         <div class="bg-faded p-5 d-flex ml-auto rounded">
           <h2 class="section-heading mb-0">
             <span class="section-heading-upper">{{$item->span1}}</span>
             <span class="section-heading-lower">{{$item->span2}}</span>
           </h2>
         </div>
       </div>
       <img class="product-item-img mx-auto d-flex rounded img-fluid mb-3 mb-lg-0" src={{$item->src1}} alt="">
       <div class="product-item-description d-flex mr-auto">
         <div class="bg-faded p-5 rounded">
           <p class="mb-0">{{$item->p1}}</p>
         </div>
       </div>
     </div>
   </div>
 </section>

 <section class="page-section">
   <div class="container">
     <div class="product-item">
       <div class="product-item-title d-flex">
         <div class="bg-faded p-5 d-flex mr-auto rounded">
           <h2 class="section-heading mb-0">
             <span class="section-heading-upper">{{$item->span3}}</span>
             <span class="section-heading-lower">{{$item->span4}}</span>
           </h2>
         </div>
       </div>
       <img class="product-item-img mx-auto d-flex rounded img-fluid mb-3 mb-lg-0" src={{$item->src2}} alt="">
       <div class="product-item-description d-flex ml-auto">
         <div class="bg-faded p-5 rounded">
           <p class="mb-0">{{$item->p2}}</p>
         </div>
       </div>
     </div>
   </div>
 </section>

 <section class="page-section">
   <div class="container">
     <div class="product-item">
       <div class="product-item-title d-flex">
         <div class="bg-faded p-5 d-flex ml-auto rounded">
           <h2 class="section-heading mb-0">
             <span class="section-heading-upper">{{$item->span5}}</span>
             <span class="section-heading-lower">{{$item->span6}}</span>
           </h2>
         </div>
       </div>
       <img class="product-item-img mx-auto d-flex rounded img-fluid mb-3 mb-lg-0" src="img/products-03.jpg" alt="">
       <div class="product-item-description d-flex mr-auto">
         <div class="bg-faded p-5 rounded">
           <p class="mb-0">{{$item->p3}}</p>
         </div>
       </div>
     </div>
   </div>
 </section>
@endforeach
@endsection