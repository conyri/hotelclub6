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
use Illuminate\Support\Facades\Auth;

Route::get('/' , function () { return view('welcome'); });


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/logout', ['uses' => 'AuthController@doLogout', 'before' => 'auth']);

Route::get('/habitacion', function () {
    return view('habitacion');
});

Route::get('/eventos', function () {
    return view('eventos');
});
Route::get('/fitnessclub', function () {
    return view('fitnessclub');
});

Route::get('/restaurant', function () {
    return view('restaurant');
});

Route::get('/uno', function () {
    return view('uno');
});
Route::get('/dos', function () {
    return view('dos');
});
Route::get('/tres', function () {
    return view('tres');
});
Route::get('/cuatro', function () {
    return view('cuatro');
});
Route::get('/cinco', function () {
    return view('cinco');
});
Route::resource('reservasa', 'reservasaController');
Route::resource('cotizacion', 'cotizacionController');
Route::resource('salones', 'salonesController');

Route::group(['middleware' => ['role:cliente']], function () {
    
    
    Route::resource('reserva2', 'reserva2Controller');
    Route::resource('coti2', 'cotizacion2Controller');
  
});


Route::group(['middleware' => ['role:admin']], function () {
    

    Route::get('/principaladmin', function () {
        return view('principaladmin');
    });

   


Route::resource('habitaciones', 'habitacionesController');
Route::resource('est_resv', 'esta_resvsController');
Route::resource('servicio', 'serviciosController');
Route::resource('reserva', 'reservaController');



});

