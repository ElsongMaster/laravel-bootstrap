<section class="container">
    <h2>Section 2: Affichage des hommes</h2>
    <table class="table">
        
            <thead>
              <tr>
                <th scope="col">id</th>
                <th scope="col">nom</th>
                <th scope="col">age</th>
                <th scope="col">genre</th>
              </tr>
            </thead>
    @foreach ($dataSect2 as $item )
    <tbody>
      <tr class="text-primary">
        <th scope="row">{{$item->id}}</th>
        <td>{{$item->nom}}</td>
        <td>{{$item->age}}</td>
        <td>{{$item->genre}}</td>
      </tr>
  
    </tbody>
    @endforeach
</table>

</section>