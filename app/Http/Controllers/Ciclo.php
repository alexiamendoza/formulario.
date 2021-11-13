<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class Ciclo extends Controller
{
public function inicio(){
        return view('welcome');
    }
    public function sueldob($S = "1550",$A = "156",$N = "1"
    ,$texto = "sueldo en el año:") {
    echo "El sueldo de un maestro: ";
echo "</br>";
    while ($N < 7) {
        echo "sueldo en el año $N: ";
echo "</br>";
echo $S;
$S = $S + $A;
$N = $N + 1;
echo "</br>";
    }
return view('sueldob',[
        'text' => $texto,
        'sueldo' => $S,
        'numeros' => $N
    ]);
    }








    public function numcerbl($Num1 = "-3",$Num2 = "0",$Num 
    = "1",$texto = ":)") {
    echo "Este numero es mayor a 0 menor a 0 e igual a 0:";
echo "</br>";
$Num1 = -3;
while ($Num1 < 0){
    echo "</br>";
echo " Un ";
echo "$Num1";
echo " Es menor a cero";
echo "</br>";
$Num1 = $Num1 + 1;}
$Num2 = 0;
while ($Num2 == 0){
    echo "</br>";
echo "Un ";
echo "$Num2";
echo " es igual que cero";
echo "</br>";
$Num2 = $Num2 + 1;}
$Num3 = 1;
while ($Num3 < 4){
    echo "</br>";
echo "Un ";
echo "$Num3";
echo " es mayor a un cero";
echo "</br>";
$Num3 = $Num3 + 1;}
    return view('numcerbl',[
        'text' => $texto
    ]);
    }















    public function multibl($N = "1",$texto = 
    "Tabla de multiplicar del 21") {

for ($N = 1; $N <=10; $N++){
    $T = $N * 21; 
}
    return view('multibl',[
        'text' => $texto
    ]);
    }
     }