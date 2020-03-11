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
Auth::routes(['verify' => true]);


Route::get('/home', 'HomeController@index')->name('home');
Route::post('register',           'Auth\RegisterController@register')->name('registrarUsuario');

Route::middleware('auth')->group(function() {
  Route::get('/eventos', function () { return redirect('eventos/verEventos'); });

  Route::get('eventos/verEventos',                   'HomeController@verEventos')->name('verEventos');
  Route::get('eventos/nuevoEvento',                   'HomeController@nuevoEvento')->name('nuevoEvento');

});

Route::middleware('guest')->group(function() {
  Route::get('/',                           'AppController@index')->name('index');
  Route::get('/register', function () { return redirect('/'); });
  
});
