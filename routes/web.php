<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;

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

//Route::resource('clientes', ClienteContoller::class);
Route::resource('clientes', 'App\Http\Controllers\ClienteController');


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

//Ruta de saludo
Route::get('/user/',function(){
    return '<h1>Hola mundo Lavarel </h1>';
});

Route::get('/saludo', function(){
    return view('saludos');

});

//Ruta de saludo con parametro
Route::get('/user/{name}',function($name){
    return '<h1>Hola' .$name .'</h1>';
});
