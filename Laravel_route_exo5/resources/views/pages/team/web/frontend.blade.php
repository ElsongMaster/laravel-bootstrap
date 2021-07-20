@extends('template.index')




@section('content')
<?php
    echo"<div class ='container d-flex '/>";
    foreach ($front as $perso) {
       
        echo "<div class='card me-2' style='width: 18rem;'>
      <img height='200' width='200' src=".asset($perso->chemin)." class='border border-primary card-img-top' alt='...'>
      <div class='card-body'>
        <h5 class='card-title'>".$perso->fonction."</h5>
        <p class='card-text'>Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href='#' class='btn btn-primary'>".$perso->nom."</a>
      </div>
    </div>" ;   
    }
    echo "<div/>"
?>
@endsection