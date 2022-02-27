<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;
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
    return view('auth.login');
});
// Route::get('/test', function () {
//     $tests = ['one','two', 'three'];
//     return view('test2')->with('tests',$tests)  ;
// });
// Route::resource('/datos','App\Http\Controllers\CategoriaController');

// Route::get('/hola', 'App\Http\Controllers\InicioController@index' );

Route::middleware(['auth:sanctum', 'verified'])->get('/dash', function () {
    return view('dashboard.dash');
})->name('dash');


// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');
