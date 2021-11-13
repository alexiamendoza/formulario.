<h1>Votar</h1>
<?php use App\Http\Controllers\Decicion;
$E = 17 >= 18 
?>
@if (17 >= 18) 
<p>FELICIDADES YA PUEDES VOTAR{{$E}}</p>
@else
<p>Aun no puedes votar</p>
@endif

Navegacion:
      <ul>
      <li><a href="{{action([Decicion::class, 'htrablade'])}}">
      Horas trabajadas</a></li>
      <li><a href="{{action([Decicion::class, 'calibl'])}}">
      Calificacion</a></li>
      </ul>