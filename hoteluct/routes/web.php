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
Route::resource('servicios2', 'servicio2Controller');

Route::group(['middleware' => ['role:cliente']], function () {
    
    Route::get('/paginaslog/welcome2' , function () { return view('/paginaslog/welcome2'); });
    Route::resource('reserva2', 'reserva2Controller');
    Route::resource('coti2', 'cotizacion2Controller');
    Route::get('/paginaslog/habitacion2', function () {
        return view('/paginaslog/habitacion2');
    });
    Route::get('/paginaslog/eventos2', function () {
        return view('/paginaslog/eventos2');
    });
    Route::get('/paginaslog/fitnessclub2', function () {
        return view('/paginaslog/fitnessclub2');
    });
    Route::get('/paginaslog/restaurant2', function () {
        return view('/paginaslog/restaurant2');
    });
    Route::get('/paginaslog/uno2', function () {
        return view('/paginaslog/uno2');
    });
    Route::get('/paginaslog/dos2', function () {
        return view('/paginaslog/dos2');
    });
    Route::get('/paginaslog/tres2', function () {
        return view('/paginaslog/tres2');
    });
    Route::get('/paginaslog/cuatro2', function () {
        return view('/paginaslog/cuatro2');
    });
    Route::get('/paginaslog/cinco2', function () {
        return view('/paginaslog/cinco2');
    });
  
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

