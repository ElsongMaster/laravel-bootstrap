@extends('template.index')



@section('content')
<div class="row">

    @foreach ($data as $item )
    <div class="card" style="width: 18rem;">
    <img height="200" width="200" src="{{asset('img/img1.jpg')}}" class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title">ID: {{$item->id}}</h5>
        <p class="card-text">Nom: {{$item->nom}}</p>
        <p class="card-text">Classe: {{$item->classe}}</p>
        <a href="#" class="btn btn-primary">Age: {{$item->age}} ans</a>
    </div>
    </div>
    @endforeach
</div>
@endsection