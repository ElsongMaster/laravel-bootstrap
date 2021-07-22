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

    @include('partials.section1')
    @include('partials.section2')
    @include('partials.section3')
    @include('partials.section4')
    @include('partials.section5')
    @include('partials.section6')
    @yield('content')
    

    <footer class="w-100  bg-success">
        <div class="container  text-center">
            <p class="Light">Site made by ElsonG</p>
        </div>
    </footer>
    <script src="{{asset('js/app.js')}}"></script>
</body>
</html>