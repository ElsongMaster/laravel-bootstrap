@extends('template/index')



@section('content')
@foreach ( $homeContent as $item )
  
<section class="page-section clearfix">
  <div class="container">
    <div class="intro">
      <img class="intro-img img-fluid mb-3 mb-lg-0 rounded" src="img/intro.jpg" alt="">
      <div class="intro-text left-0 text-center bg-faded p-5 rounded">
        <h2 class="section-heading mb-4">
          <span class="section-heading-upper">{{$item->span1}}</span>
          <span class="section-heading-lower">{{$item->span2}}</span>
        </h2>
        <p class="mb-3">{{$item->p1}}
        </p>
        <div class="intro-button mx-auto">
          <a class="btn btn-primary btn-xl" href="#">{{$item->linkTxt}}</a>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="page-section cta">
  <div class="container">
    <div class="row">
      <div class="col-xl-9 mx-auto">
        <div class="cta-inner text-center rounded">
          <h2 class="section-heading mb-4">
            <span class="section-heading-upper">{{$item->span3}}</span>
            <span class="section-heading-lower">{{$item->span4}}</span>
          </h2>
          <p class="mb-0">{{$item->p2}}</p>
        </div>
      </div>
    </div>
  </div>
</section>
@endforeach

@endsection