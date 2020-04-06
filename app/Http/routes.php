<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('./principal/index');
});
Route::get('convocatorias', function(){
    return view('./principal/convocatorias');
});
Route::get('contacto', function(){
    return view('./principal/contacto');
});
Route::get('login', function(){
    return view('./login');
});
Route::get('register', function(){
    return view('./register');
});

Route::auth();

Route::get('/admin', 'AdminController@index');

Route::get('/home', 'HomeController@index');
