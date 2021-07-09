@extends('template/main')
@section('content')

<div class="body_content">
<?php 
    $date = date("d-m-Y");
    $heure = date("H:i");
    echo "<h1>Date du Jour : $date et il est $heure </h1>"
?>
</div>
@endsection

    

