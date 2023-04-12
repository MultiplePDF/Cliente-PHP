<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\MySoapClientController;

Route::get('/imprimirjson', 'App\Http\Controllers\MiControlador@imprimirJson');
//Route::get('/soap', 'MySoapClientController@callSoapService');

// Ruta que llama al método llamarServicioSoap del controlador ServicioSoapController
//Route::post('/llamar-servicio-soap', 'App\Http\Controllers\MySoapClientController@sumar');
//Route::post('/sumar', 'App\Http\Controllers\MySoapClientController@sumar')->name('sumar');
//Route::post('/sumar', [MySoapClientController::class, 'sumar'])->name('sumar');
/*
Route::get('/sumando', function () {
    return view('soap');
})->name('soap');
*/
Route::get('/sumando', [MySoapClientController::class, 'sumar'])->name('sumar');
Route::post('/sumado', [MySoapClientController::class, 'sumar'])->name('sumar');
Route::get('/', function () {
    return view('hola.home');
});

Route::get('/home', function () {
    return view('hola.home');
})->name('home');


Route::get('/SignIn', function () {
    return view('hola.SignIn');
})->name('SignIn');


Route::get('/SignUp', function () {
    return view('hola.SignUp');
})->name('SignUp');

Route::get('/Recuperar', function () {
    return view('hola.Recuperar');
})->name('Recuperar');

Route::get('/Perfil', function () {
    return view('hola.Perfil');
})->name('Perfil');

Route::get('/Descargasregistro', function () {
    return view('hola.Descargasregistro');
})->name('Descargasregistro');

Route::get('/Archivos', function () {
    return view('hola.Archivos');
})->name('Archivos');

Route::get('/Descargastotal', function () {
    return view('hola.Descargastotal');
})->name('Descargastotal');

Route::get('/SubirArchivos', function () {
    return view('hola.Subir');
})->name('SubirArchivos');

Route::get('/soap1', 'App\Http\Controllers\SoapController@testSoap')->name('soap');
Route::post('/soap1', 'App\Http\Controllers\SoapController@testSoap');

Route::get('/cargar-archivo', 'App\Http\Controllers\ArchivoController@mostrarFormularioCarga');
Route::post('/cargar-archivo', 'App\Http\Controllers\ArchivoController@cargarArchivo');
