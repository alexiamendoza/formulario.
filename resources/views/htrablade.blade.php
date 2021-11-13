<h1> Horas trabajadas</h1>
<?php use App\Http\Controllers\Decicion;
$sph = 20 * 39;
$sphd = 40 * 70;
if (70 <= 40)
?>
<h2>Trabajaste menos de 40 horas tu sueldo es:</h2>
<p>{{$sph}}</p>
<h2>Trabajaste mas de 40 horas tu sueldo es:</h2>
<p>{{$sphd}}</p>

Navegacion:
      <ul>
      <li><a href="{{action([Decicion::class, 'votarb'])}}">votar
      </a></li>
      <li><a href="{{action([Decicion::class, 'calibl'])}}">Calificacion
      </a></li>
      </ul>