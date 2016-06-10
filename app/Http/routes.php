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
/*PERFIL DE USUARIO*/
Route::get('perfil/nuevo',[
    'uses'  => 'ProfileController@create',
    'as'    => 'create'
]);
Route::post('perfil/nuevo',[
    'uses'  => 'ProfileController@store',
    'as'    => 'create'
]);
Route::get('perfil/{id}',[
    'uses'  => 'ProfileController@show',
    'as'    => 'indexPerfil'
]);
Route::get('editar/{id}',[
    'uses'  => 'ProfileController@edit',
    'as'    => 'editProfile'
]);
Route::put('actualizar/{id}',[
    'uses'  => 'ProfileController@update',
    'as'    => 'updateProfile'
]);
/**ADMINISTRADOR*/
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
/*localidades */
Route::get('evento/localidades',[
    'uses'  => 'LocationController@index',
    'as'    => 'localidades'
]);
Route::post('evento/localidades',[
    'uses'  => 'LocationController@store',
    'as'    => 'localidades'
]);

/** cliente*/
Route::get('reservar/{id}',[
    'uses'  => 'ReservationController@index',
    'as'    => 'verPartido'
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

/** pruebas! */
Route::get('tt', function (){
    $e = \App\User::find(1);
    if ($e->profile == null){
        return "nuuul";
    }
    return dato;
});
Route::get('/si',function (){


    $event = new \App\Event();
    $event->titulo = "bol vs ti";
    $event->fecha_event = "2016-06-22T18:00";
    $event->descripccion = "asdfasdfasdf sssAaAAA";
    $event->user_id     = "1";
    $event->save();
    $locali = new \App\Location();
    $locali->localidad = 'Butaca';
    $locali->cantidad = '1843';
    $locali->precio = '300';
    $event->location()->save($locali);
    $locali = new \App\Location();
    $locali->localidad = 'Curva Norte';
    $locali->cantidad = '10379';
    $locali->precio = '50';
    $event->location()->save($locali);
    return "registrado";
    /*
    $events = \App\Event::find(3)->location;
    if ($events == null )
    {
        return "no";
    }
    return $events;
    */
    //$profile = \App\User::find(1)->Profile;
    //return $profile;
});

