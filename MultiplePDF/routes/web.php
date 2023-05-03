<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\MySoapClientController;
use Illuminate\Http\Request;

Route::get('/imprimirjson', 'App\Http\Controllers\MiControlador@imprimirJson');
Route::get('/sumando', [MySoapClientController::class, 'sumar'])->name('sumar');
Route::post('/sumado', [MySoapClientController::class, 'sumar'])->name('sumar');

Route::get('/cargar-archivo', 'App\Http\Controllers\ArchivoController@mostrarFormularioCarga');
Route::post('/cargar-archivo', 'App\Http\Controllers\ArchivoController@cargarArchivo');


Route::middleware('web')->group(function () {
    
    // Rutas públicas:

    //home
    Route::get('/', function () {
        return view('hola.home');
    })->name('home');

    //How works?
    Route::get('/servicios', [HomeController::class, 'services'])->name('services');

    //Contact
    Route::get('/contacto', [HomeController::class, 'contact'])->name('contact');

    //Sign In
    Route::get('/SignIn', function () {
        
        return view('hola.SignIn');
    })->name('SignIn')->middleware('check.token')->uses('App\Http\Controllers\SoapController@wipSoap');
    
    Route::post('/SignIn', 'App\Http\Controllers\SoapController@wipSoap');    

    //Route::post('/SignIn', 'App\Http\Controllers\SoapController@wipSoap')->middleware('check.token');    

    //Sign Up
    Route::get('/SignUp', function () {
        
        return view('hola.SignUp');
    })->name('SignUp')->uses('App\Http\Controllers\SoapController@test3Soap');
    

    Route::post('/SignUp', 'App\Http\Controllers\SoapController@test3Soap');    


    //Recovery
    Route::get('/Recuperar', function () {
        return view('hola.Recuperar');
    })->name('Recuperar');
    
    // Rutas SOAP
    Route::get('/soap1', 'App\Http\Controllers\SoapController@testSoap')->name('soap');
    Route::post('/soap1', 'App\Http\Controllers\SoapController@testSoap');
    
});


// Rutas que requieren autenticación
Route::middleware(['web', 'private', 'check.token'])->group(function () {

    // Rutas privadas:

    //Profile
    Route::get('/Perfil', function () {
        return view('hola.Perfil');
    })->name('Perfil')->uses('App\Http\Controllers\SoapController@test6Soap');

    //Upload Files
    Route::get('/cargar-archivo', function () {
        return view('cargar-archivo');
    })->name('cargar-archivo')->uses('App\Http\Controllers\MiControlador@cargarArchivo');
    
    //Route::post('/cargar-archivo', 'App\Http\Controllers\MiControlador@cargarArchivo');

    Route::post('/cargar-archivo', function (Request $request) {
        // Llamamos al método cargarArchivo de MiControlador
        $response = app()->make('App\Http\Controllers\MiControlador')->cargarArchivo($request);
    
        // Llamamos al método enviarInformacion de SoapController
        $responseSoap = app()->make('App\Http\Controllers\SoapController')->test4Soap($request);
    
        // Devolvemos la respuesta de MiControlador
        return $responseSoap;
    });
    
    //Files
    Route::get('/Archivos', function () {
        return view('hola.Archivos');
    })->name('Archivos')->uses('App\Http\Controllers\SoapController@test5Soap');

    //Total downloads
    Route::get('/Descargastotal', function () {
        return view('hola.Descargastotal');
    })->name('Descargastotal');

    //Record downloads
    Route::get('/Descargasregistro', function () {
        return view('hola.Descargasregistro');
    })->name('Descargasregistro');

    //
    //Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::post('/logout', 'App\Http\Controllers\Auth\LoginController@logout')->name('logout');


});