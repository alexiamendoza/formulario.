<h1>Aprobados/Reprobados: </h1>
</br>
@for ($calificacion=0;$calificacion<=5; $calificacion++)
<h2>calificacion: </h2>
<h3>{{$calificacion}}</h3>
<h4> NO APROBADO</h4>
@endfor

@for ($calificacion=6;$calificacion<=10; $calificacion++)
<h2>calificacion: </h2>
<h3>{{$calificacion}}</h3>
<h4> APROBADO</h4>
@endfor