<?php
echo '<h1>sueldo de un trabajador: </h1>';
echo '</br>';

$salario=1600;
$incremento=250;
$numero=1;
while ($numero<7) {

echo "sueldo numero $numero: ";
echo '</br>';
echo $salario;

$salario=$salario+$incremento;
$numero=$numero+1;
echo '</br>';
}
?>