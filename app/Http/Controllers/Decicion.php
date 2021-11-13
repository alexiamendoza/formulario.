<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Decicion extends Controller
{
    public function inicio(){
        return view('welcome');
    }

    public function votarb($E = "20",$texto = "Tu edad es:")
     {
    if ($E >= 18)
    {
        echo"FELICIDADES YA PUEDES VOTAR";
    }else{
        echo"Aun no puedes votar";
    }
    return view('votarb')
    ->with('text',$texto)
    ->with('edad',$E);
    }








   public function htrablade($ndht = "2",$sph = "35",$sphe = "70",
   $texto = "Numero de horas que trabajaste:") {
    if ($ndht <= 40)
{
    echo "Trabajaste menos de 40 horas tu sueldo es:" . 
    $sph * $ndht;
}else{
    echo "Trabajste mas de 40 horas tu sueldo es:" . $sphe * $ndht;
}
    return view('htrablade')
    ->with('text',$texto)
    ->with('sueldo',$ndht);
    }












    public function calibl($C = "8",$texto = "Tu calificacion es:") {
    if ($C <= 5)
{
    echo "Tu calificaion en letra es de una F";
}else 
if ($C <= 7){
    echo "Tu calificaion en letra es de una D";
}else 
if ($C == 8){
    echo "Tu calificaion en letra es de una C";
}else 
if ($C == 9){
    echo "Tu calificaion en letra es de una B";
}else 
if ($C == 10){
    echo "Tu calificaion en letra es de una A";
} else {
    echo"ERROR! Solo se pueden ingresar numeros del 0 al 10";
}
    return view('calibl')
    ->with('text',$texto)
    ->with('calif',$C);
    }
}