<section class="container">
    <h2>Section 5: Affichage des Femmes entre 18 ans et 24 ans</h2>
    <table class="table">
        
            <thead>
              <tr>
                <th scope="col">id</th>
                <th scope="col">nom</th>
                <th scope="col">age</th>
                <th scope="col">genre</th>
              </tr>
            </thead>
    @foreach ($dataSect5 as $item )
    <tbody>
      <tr style="color:pink">
        <th scope="row">{{$item->id}}</th>
        <td>{{$item->nom}}</td>
        <td>{{$item->age}}</td>
        <td>{{$item->genre}}</td>
      </tr>
  
    </tbody>
    @endforeach
</table>

</section>