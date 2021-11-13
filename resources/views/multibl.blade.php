<?php use App\Http\Controllers\Ciclo;?>
<html>
<body></body>
</html>
<H1>Tabla de multiplicar del 21</H1>
</br>
<p>
@for($i=1; $i<=10; $i++)
21 x {{$i}} = {{21 * $i}}
<br>
@endfor
</p>

Navegacion:
      <ul>
      <li><a href="{{action([Ciclo::class, 'sueldob'])}}">sueldo
      </a></li>
      <li><a href="{{action([Ciclo::class, 'numcerbl'])}}">
      numeros a cero</a></li>
      </ul>