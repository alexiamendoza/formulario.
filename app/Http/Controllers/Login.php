<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Login extends Controller
{
    function login(){
        return view('login');
}
function valida(Request $request){
        //debemos hacer referencia al atributo name en el input del formulario
        $user = $request->input('inuser');
        $pass = $request->input('inpass');
        //dd($request);
        return view('valida');
    }
}