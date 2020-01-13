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

Route::get('/', function () {
    return view('index');
});

Route::get('/index', function () {
    return view('index');
})->name('index');

Route::get('/contacto', function () {
    return view('contacto');
})->name('contacto');

Route::get('/productos', function () {
    return view('productos');
})->name('productos');

Route::get('/nosotros', function () {
    return view('nosotros');
})->name('nosotros');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
