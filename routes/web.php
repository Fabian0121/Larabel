<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
//metodo para mostrar nombre/apellidoP/apellidoM/edad
//el ejercicio menciono los datos de una persona pero nosostros al ser 2 quisimos agregar el de ambos
Route::get('/nombres/{nombre1}/{apellidoP1}/{apellidoM1}/{edad1}/{nombre2}/{apellidoP2}/{apellidoM2}/{edad2}'
       , function ($nombre1,$apellidoP1,$apellidoM1,$edad1,$nombre2,$apellidoP2,$apellidoM2,$edad2) {
    echo "El alumno1 es: $nombre1  $apellidoP1  $apellidoM1 con edad de  $edad1";
    echo "<br>";
    echo "El alumno2 es: $nombre2  $apellidoP2  $apellidoM2 con edad de  $edad2";
});
//Metodo para la suma de 2 numeros
Route::get('/suma/{valor1}/{valor2}', function ($valor1,$valor2) {
    echo "La suma de los numeros $valor1 y $valor2 es : ".($valor1+$valor2)."";
});
//Metodo para mostrar a  10 usuarios
Route::get('/mostrar', function () {
$nombres = ["Luis","Tomas","Erika","Andres","Isai","Hector","Angel","Dante","Edgar","Mario","Roberto"];
$apellidoP =["Reyes","Lobera","Santoyo","Paz","Juarez","Soto","Aguilera","Panini","Ortega","Martinez"];
$correo=["Luis@gmail.com","Tomas@gmail.com","Erika@gmail.com","Andres@gmail.com","Isai@gmail.com","Hector@gmail.com","Angel@gmail.com","Dante@gmail.com","Edgar@gmail.com","Mario@gmail.com","Roberto@gmail.com"];
$edad=["20","21","25","26","24","23","24","25","22","24",];
//Este es el arreglo con la idea principal, aun esta en pruebas
//$datos=[['nombres'=>"Luis","Tomas","Erika","Andres","Isai","Hector","Angel","Dante","Edgar","Mario","Roberto"],['apellidos'=>"Reyes","Lobera","Santoyo","Paz","Juarez","Soto","Aguilera","Panini","Ortega","Martinez"]];

return view('usuarios',['nom'=>$nombres,'apellidos'=>$apellidoP,'correo'=>$correo,'edad'=>$edad]);
});


