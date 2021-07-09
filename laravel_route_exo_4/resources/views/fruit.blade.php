@extends('template/main')

@section('content')

<div class="body_content">
    <?php  
        echo "<p>Voici les fruits de mon panier:</p>";
        foreach($tabFruits as $fruit)
        echo "<p> ==> $fruit</p>";
    ?>
</div>
@endsection
