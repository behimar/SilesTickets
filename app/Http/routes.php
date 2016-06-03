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
Route::get('/sii',function () {
    $user = \App\User::find(1);
    return $user;
});
Route::get('/si',function (){
    $event = \App\Event::find(1);
        $locali = new \App\Location();
        $locali->localidad = 'Recta';
        $locali->cantidad = '5000';
        $locali->precio = '80';
    $event->location()->save($locali);
        $locali = new \App\Location();
        $locali->localidad = 'Curva Norte';
        $locali->cantidad = '5000';
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
