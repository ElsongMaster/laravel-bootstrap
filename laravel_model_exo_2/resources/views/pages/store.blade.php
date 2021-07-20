@extends('template/index')



@section('content')
@foreach ($storeContent as $item )
  
<section class="page-section cta">
 <div class="container">
   <div class="row">
     <div class="col-xl-9 mx-auto">
       <div class="cta-inner text-center rounded">
         <h2 class="section-heading mb-5">
           <span class="section-heading-upper">{{$item->span1}}</span>
           <span class="section-heading-lower">{{$item->span2}}</span>
         </h2>
         <ul class="list-unstyled list-hours mb-5 text-left mx-auto">
           <li class="list-unstyled-item list-hours-item d-flex">
             {{$item->D1}}
             <span class="ml-auto">{{$item->spanCl}}</span>
           </li>
           <li class="list-unstyled-item list-hours-item d-flex">
            {{$item->D2}}
             <span class="ml-auto">{{$item->spanH1}}</span>
           </li>
           <li class="list-unstyled-item list-hours-item d-flex">
             {{$item->D3}}
             <span class="ml-auto">{{$item->spanH1}}</span>
           </li>
           <li class="list-unstyled-item list-hours-item d-flex">
             {{$item->D4}}
             <span class="ml-auto">{{$item->spanH1}}</span>
           </li>
           <li class="list-unstyled-item list-hours-item d-flex">
             {{$item->D5}}
             <span class="ml-auto">{{$item->spanH1}}</span>
           </li>
           <li class="list-unstyled-item list-hours-item d-flex">
             {{$item->D6}}
             <span class="ml-auto">{{$item->spanH1}}</span>
           </li>
           <li class="list-unstyled-item list-hours-item d-flex">
             {{$item->D7}}
             <span class="ml-auto">{{$item->spanH2}}</span>
           </li>
         </ul>
         <p class="address mb-5">
           <em>
             <strong>{{$item->p1_i1}}</strong>
             <br>
            {{$item->p1_i2}}
           </em>
         </p>
         <p class="mb-0">
           <small>
             <em>{{$item->p2_i1}}</em>
           </small>
           <br>
           {{$item->p2_i2}}
         </p>
       </div>
     </div>
   </div>
 </div>
</section>

<section class="page-section about-heading">
 <div class="container">
   <img class="img-fluid rounded about-heading-img mb-3 mb-lg-0" src={{$item->src}} alt="">
   <div class="about-heading-content">
     <div class="row">
       <div class="col-xl-9 col-lg-10 mx-auto">
         <div class="bg-faded rounded p-5">
           <h2 class="section-heading mb-4">
             <span class="section-heading-upper">{{$item->span3}}</span>
             <span class="section-heading-lower">{{$item->span4}}</span>
           </h2>
           <p>{{$item->p3}}</p>
           <p class="mb-0">{{$item->p4_i1}}
             <em>{{$item->p4_i2}}</em>
            {{$item->p4_i3}}</p>
         </div>
       </div>
     </div>
   </div>
 </div>
</section>  
@endforeach
@endsection