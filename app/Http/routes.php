<?php
Route::get('/', function () {
    return view('welcome');
});


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
$api = app('Dingo\Api\Routing\Router');

$api->version('v1', function ($api) {
	$api->post('login',['uses' => '\App\Http\Controllers\api\v1\AuthenticateController@authenticate']);
	$api->get('sedes',['uses' => '\App\Http\Controllers\Api\V1\SedesController@index']);
	//todo lo que requiere authentificacion
	$api->group(['middleware' => 'api.auth'], function($api){
		$api->get('yo/aplicaciones',['middleware' => 'api.auth', 'uses' => '\App\Http\Controllers\Api\V1\AplicacionesController@getMyAplicaciones']);
		//Instructores
		$api->group(['middleware' => 'permiso.check:2'], function ($api){
			$api->get('instructores', ['uses' => '\App\Http\Controllers\Api\V1\InstructoresController@index']);
		});
	});

	//instructores
	//sedes
	// $api->get('jojo', ['middleware' => 'api.auth', 'uses' => '\App\Http\Controllers\Api\V1\TestController@index'] );
	
});

