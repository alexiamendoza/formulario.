<?php use App\Http\Controllers\Ciclo;?>

<h1>El sueldo de un empleado</h1>

<?php 
$ndht = 1550;
?>

@for($i=1; $i<=6; $i++)
<?php 
$ndht = $ndht * 1.10;
?>

</html>
</body>

Navegacion:
      <ul>
      <li><a href="{{action([Ciclo::class, 'numcerbl'])}}">num ceros
      </a></li>
      <li><a href="{{action([Ciclo::class, 'multibl'])}}">Tabala 
      multiplicar
      </a></li>
      </ul>