<?php

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

use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Route;

Route::get('/' , function () { return view('welcome'); });


Route::resource('habitaciones', 'habitacionesController');
Route::resource('cotizacion', 'cotizacionController');
Route::resource('est_resv', 'esta_resvsController');
Route::resource('servicio', 'serviciosController');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/habitacion', function () {
    return view('habitacion');
});
Route::get('/eventos', function () {
    return view('eventos');
});
Route::get('/fitnessclub', function () {
    return view('fitnessclub');
});
Route::get('/promociones', function () {
    return view('promociones');
});
Route::get('/restaurant', function () {
    return view('restaurant');
});
Route::get('/principaladmin', function () {
    return view('principaladmin');
});
