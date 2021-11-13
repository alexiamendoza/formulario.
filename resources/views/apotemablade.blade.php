<h1>Apotema cuadrado</h1>
<?php use App\Http\Controllers\Secuencial;
$lado = 541;
$resultado = $lado /2;
?> 
<p>El apotema de un cuadrado es:</p>
<p>{{$resultado}}</p>

Navegacion:
      <ul>
      <li><a href="{{action([Secuencial::class, 'areatrapblade'])}}">
      Area trapecio</a></li>
      <li><a href="{{action([Secuencial::class, 'areatribl'])}}">
      Area de un Triangulo</a></li>
      </ul>