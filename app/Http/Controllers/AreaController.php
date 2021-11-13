<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AreaController extends Controller
{
    function datosArea(){
        return view('area');
    }

    function calculaArea(Request $request){
        //debemos hacer referencia al atributo name en el input del formulario
        $base = $request->input('inbase');
        $altura = $request->input('inaltura');

        $area = floatval($base) * floatval($altura);
        //dd($request);
        return view('showarea',['area' => $area]);
    }
}