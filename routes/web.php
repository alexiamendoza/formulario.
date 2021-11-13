<?php
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Secuencial;
use App\Http\Controllers\Decicion;
use App\Http\Controllers\Ciclo;
use App\Http\Controllers\AreaController;
use App\Http\Controllers\Login;


Route::get('/area', [AreaController::class,'datosArea'])
->name('datosarea');
//donde procesamos el formulario
Route::post('/calculaarea',[AreaController::class, 'calculaArea'])
->name('calculaarea');

Route::get('/login', [Login::class, 'login'])
->name('login');
Route::post('/valida', [Login::class, 'valida'])
->name('valida');





Route::get('/', [Secuencial::class, 'inicio']);

Route::get('/trapecio/{alt?}/{b?}/{b1?}/{f?}',
 [Secuencial::class, 'areatrapblade'])->name ('Area trapecio');

Route::get('/apotema/{a?}/{f?}', 
[Secuencial::class, 'apotemablade'])->name('Apotema');

Route::get('/triangulo/{b?}/{alt?}/{f?}',
 [Secuencial::class, 'areatribl'])->name ('Area triangulo');

















Route::get('/votar', [Decicion::class, 'votarb'])->name('Votar');

Route::get('/htra', [Decicion::class, 'htrablade'])->name
('Horas trabajadas');

Route::get('/calificaciones', [Decicion::class, 'calibl'])->name
('Calificacion');
















Route::get('/smaestro', [Ciclo::class, 'sueldob'])->name('Sueldo');
























Route::get('/ceros', [Ciclo::class, 'numcerbl'])->name
('Numeros cero');















Route::get('/tabmultiplicacion', [Ciclo::class, 'multibl'])->name
('Tabla');