<h1>Area trapecio</h1>
<?php use App\Http\Controllers\Secuencial;
$bmenor = 50;
$bmayor = 162;
$altura = 49;
$resultado = $altura * ($bmenor + $bmayor)/2;
?> 
<h3>el area del trapecio es:</h3>
<p>{{$resultado}}</p>

Navegacion:
      <ul>
      <li><a href="{{action([Secuencial::class, 'apotemablade'])}}">
      apotema</a></li>
      <li><a href="{{action([Secuencial::class, 'areatribl'])}}">
      Area de un Triangulo</a></li>
      </ul>