<h1>Area triangulo</h1>
<?php use App\Http\Controllers\Secuencial;
$base= 47;
$altura = 120;
$resultado = $altura * $base/2;
?>
<h2>El area del triangulo es: </h2>
<p>{{$resultado}}</p>

Navegacion:
      <ul>
      <li><a href="{{action([Secuencial::class, 'apotemablade'])}}">
      apotema</a></li>
      <li><a href="{{action([Secuencial::class, 'areatrapblade'])}}">
      Area trapecio</a></li>
      </ul>