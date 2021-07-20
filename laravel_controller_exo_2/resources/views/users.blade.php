<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Document</title>
</head>
<body>
    <div class="row">

        @foreach ($users as $user )
        <div class="card" style="width: 18rem;">
        <img height="200" width="200" src="{{asset('img/'.$user->url)}}" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">ID: {{$user->ID}}</h5>
            <p class="card-text">email:{{$user->email}} </p>
            <a href="#" class="btn btn-primary">{{$user->nom}}</a>
        </div>
        </div>
        @endforeach
    </div>

    
    <script src="{{asset('js/app.js')}}"></script>
</body>
</html>