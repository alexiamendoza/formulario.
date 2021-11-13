<h1>Calificacion</h1>
<?php use App\Http\Controllers\Decicion;
$f = 6;
$e = 5;
$d = 7;
$c = 8;
$b = 9;
$a = 10;
$g = 0;
?>
<h2>Es A cuando la calificacion es:</h2>
<p>{{$a}}</p>
<h2>Es B cuando la calificacion es:</h2>
<p>{{$b}}</p>
<h2>Es C cuando la calificacion es:</h2>
<p>{{$c}}</p>
<h2>Es D cuando la calificacion es:</h2>
<p>{{$f}}</p>
<p>{{$d}}</p>
<h2>Es F cuando la calificacion es:</h2>
<p>De {{$e}} a  {{$g}}</p>

Navegacion:
      <ul>
      <li><a href="{{action([Decicion::class, 'votarb'])}}">
      votar</a></li>
      <li><a href="{{action([Decicion::class, 'htrablade'])}}">
      horas trabajadas</a></li>
      </ul>