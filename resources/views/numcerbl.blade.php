<?php use App\Http\Controllers\Ciclo;?>
<h2>Cantidades de numeros que son ceros, antes o despues de cero: </h2>
</br>

@for ($cantidad=-5;$cantidad<=-1;$cantidad++)
<h4>El numero {{$cantidad}} es menor que cero</h4>
@endfor
</br>

@for ($cantidad=0;$cantidad==0;$cantidad++)
<h4>El numero {{$cantidad}} es cero</h4>
@endfor
</br>

@for ($cantidad=1;$cantidad<=5;$cantidad++)
<h4>El numero {{$cantidad}} es mayor que cero</h4>
@endfor
</br>







Navegacion:
      <ul>
      <li><a href="{{action([Ciclo::class, 'sueldob'])}}">sueldo
      </a></li>
      <li><a href="{{action([Ciclo::class, 'multibl'])}}">
      Tabala multiplicar</a></li>
      </ul>