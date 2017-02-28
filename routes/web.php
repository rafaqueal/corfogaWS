<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/



/*Vista de inicio de la aplicación web*/
Route::get('/', function () {
    return view('auth.login');
});

/* Vista en Construcción */
Route::get('vistaConstruccion', function () {
    return view('vistaConstruccion');
});

/*Ruta para llamar vista cargar animales mediante excel*/
Route::get('cargar', function () {
    return view('Animal.cargarAnimales');
});


/*Rutas para los servicios web*/
Route::resource('animal', 'animalController',
                ['only' => ['index','edit','create','store', 'update', 'destroy', 'show']]);


/*Rutas para CRUD fincas*/
Route::resource('finca', 'fincaController',
                ['only' => ['index', 'edit','create','store', 'update', 'destroy', 'show']]);



/*Rutas para CRUD Propietario*/
Route::resource('propietario', 'propietarioController',
                ['only' => ['index', 'edit','create','store', 'update', 'destroy', 'show']]);


/*Rutas para CRUD Usuarios*/
Route::resource('usuario', 'usuarioController',
                ['only' => ['index', 'edit','create','store', 'update', 'destroy', 'show']]);


/*Rutas para login de servicios web*/

$api = app('Dingo\Api\Routing\Router');
$api->version('v1', function($api){

	$api->post('register','App\Http\Controllers\Auth\API\AuthController@register');
	$api->post('login','App\Http\Controllers\Auth\API\AuthController@authenticate');

});


$api->version('v1', ['middleware' => 'jwt.auth'],function($api){

	$api->get('users','App\Http\Controllers\Auth\API\AuthController@index');

	$api->get('users/{id}','App\Http\Controllers\Auth\API\AuthController@show');

	$api->get('token','App\Http\Controllers\Auth\API\AuthController@getToken');

	$api->post('logout','App\Http\Controllers\Auth\API\AuthController@destroy');
});


/*Ruta para obtener datos de los animales y hacer CRUD*/
Route::resource('animales', 'animalesController',
                ['only' => ['index', 'store', 'update', 'destroy', 'show']]);
Auth::routes();

Route::get('/home', 'HomeController@index');
