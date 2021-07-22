<section class="container">
    <h2>Section 6: Affichage des membres qui dont l'âges n'est pas compris entre 18 ans et 24 ans</h2>
    <table class="table">
        
            <thead>
              <tr>
                <th scope="col">id</th>
                <th scope="col">nom</th>
                <th scope="col">age</th>
                <th scope="col">genre</th>
              </tr>
            </thead>
    @foreach ($dataSect6 as $item )
    @if ($item->genre ==="Homme")
        <tbody>
      <tr class="text-primary">
        <th scope="row">{{$item->id}}</th>
        <td>{{$item->nom}}</td>
        <td>{{$item->age}}</td>
        <td>{{$item->genre}}</td>
      </tr>
  
    </tbody>    
    @else
    <tbody>
      <tr style="color:pink">
        <th scope="row">{{$item->id}}</th>
        <td>{{$item->nom}}</td>
        <td>{{$item->age}}</td>
        <td>{{$item->genre}}</td>
      </tr>
  
    </tbody>
        
    @endif
    @endforeach
</table>

</section>