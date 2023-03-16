<?php

use Illuminate\Support\Facades\Route;


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



