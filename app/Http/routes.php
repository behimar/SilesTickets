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

Route::get('/',[
    'uses'  => 'Auth\AuthController@getLogin',
    'as'    => 'login'
]);
Route::post('/',[
    'uses'  => 'Auth\AuthController@postLogin',
    'as'    => 'login'
]);
Route::get('regristo',[
    'uses'  => 'Auth\AuthController@getRegister',
    'as'    => 'register'
]);
Route::post('registro',[
    'uses'  => 'Auth\AuthController@postRegister',
    'as'    => 'register'
]);
Route::get('logout', [
    'uses'  => 'Auth\AuthController@getLogout',
    'as'    => 'logout'
]);
Route::get('home',[
    'uses'  => 'HomeController@getIndex',
    'as'    => 'home'
]);
Route::get('perfil-nuevo',[
    'uses'  => 'ProfileController@create',
    'as'    => 'create'
]);
Route::get('perfil-{id}',[
    'uses'  => 'ProfileController@show',
    'as'    => 'indexPerfil'
]);

/*ADMINISTRADOR*/
Route::get('users',[
    'uses'  => 'UsersAdminController@index',
    'as'    => 'listUsers'
]);
Route::get('users/new',[
    'uses'  => 'UsersAdminController@create',
    'as'    => 'newUser'
]);
Route::post('users/new',[
    'uses'  => 'UsersAdminController@store',
    'as'    => 'newUser'
]);
/*eventos*/
Route::get('eventos',[
    'uses'  => 'EventController@index',
    'as'    => 'listEvents'
]);
Route::post('eventos',[
    'uses'  => 'EventController@store',
    'as'    => 'listEvents'
]);


Route::get('/wel', function () {
    return view('layouts.panel');
});
Route::get('/ad', function () {
    return view('layouts.admin');
});
Route::get('/vend', function () {
    return view('vendedor.inicio');
});

Route::get('localidades', function () {
    return view('vendedor.localidades');
});

Route::get('sectores', function () {
    return view('vendedor.sectores');
});

Route::get('entradas', function () {
    return view('vendedor.entradas');
});
Route::get('tt', function (){
    $e = \App\Event::all();
    return $e;
});
