<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Date</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
<?php 
    $date = date("d-m-Y");
    $heure = date("H:i");
    echo "<h1>Date du Jour : $date et il est $heure </h1>"
?>
    
   <script src="{{asset('js/app.js')}}"></script> 
</body>
</html>