<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="/">home</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{route('sav')}}">sav</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('partenariat')}}">partenariat</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('info')}}">info</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('front')}}">frontend</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('back')}}">backend</a>
        </li>
      </ul>
    </div>
  </div>
</nav>