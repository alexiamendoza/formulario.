<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Secuencial extends Controller
{
    public function inicio(){
        return view('welcome');
    }

    public function areatrapblade($altura = "49",
    $bmenor = "50",$bmayor = "162",$figura ="La Área del trapecio es:"){   
   $A = $altura * ($bmenor + $bmayor) /2;
    return view('areatrapblade',[
        'base' => $bmenor,
        'altura' => $altura,
        'base1' => $bmayor,
        'area' => $A,
        'fig' => $figura
        
    ]);
    }








    public function apotemablade($lado = "541",$figura = 
     "La apotema de este cuadrado es:"){
  $a = $lado/2;
    return view('apotemablade',[
        'lado' => $lado,
        'apotema' => $a,
        'fig' => $figura
    ]);
    }









    public function areatribl($base = "47",$altura = 
    "120",$figura = "La Área de este Triangulo es:"){
    $A = $base * $altura/2;
    return view('areatribl',[
       'altura' => $altura,
        'base'  => $base,
        'area' => $A,
        'fig' => $figura
    ]);
    }
}