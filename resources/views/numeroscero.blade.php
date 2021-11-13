<?php
echo '<h1>cantidad de numeros que son ceros,
 antes o despues de cero: </h1>';
echo '</br>';

$cantidad=-5;
while($cantidad<0){
    echo '</br>';
echo 'numero ';
echo "$cantidad";
echo ' es menor que cero';
echo '</br>';

$cantidad=$cantidad+1;}
while($cantidad==0){
    echo '</br>';
echo 'numero ';
echo "$cantidad";
echo ' es cero';
echo '</br>';

$cantidad=$cantidad+1;}
while($cantidad<5){
    echo '</br>';
echo 'numero ';
echo "$cantidad";
echo ' es mayor que cero';
echo '</br>';
$cantidad=$cantidad+1;}
?>