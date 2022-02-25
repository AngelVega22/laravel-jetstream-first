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

// Route::get('/hola', function(){
//     return '<h1> hola mundo<h1>';
// });

// Route::get('/prueba', function(){
//     $array = ['js','php','c'];
//     return $array;
// });

// Route::get('/nombre/{nombre}',function($nombre){
//     return '<h1>Mi nombre es: ' .$nombre. '</h1>';
// });

// Route::get('/cliente/{cliente?}',function($cliente ='Cliente random'){
//     return '<h1>El Cliente es: ' .$cliente. '</h1>';
// });

// Route::get('/ruta1', function(){
//     return '<h1>Esta es la ruta 1<h1>';
// }) ->name('ruta1');

// Route::get('/ruta2', function(){
//     // return '<h1>Esta es la ruta 2<h1>';
//     return redirect() ->Route('ruta1');
// }) ;

// Route::get('/usuario/{usuario}', function($usuario){
//     return 'El usuario es:' .$usuario;
// })-> where('usuario','[0-9]+');


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');