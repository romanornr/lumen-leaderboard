<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/
$app->get('/', function (){
	return view('welcome');
});

$app->group(['prefix' => 'api/v1','namespace'=>'App\Http\controllers'], function($app)
{
	$app->get('players','PlayerController@index');
	$app->get('players{id}','PlayerController@getPlayer');
	
	$app->post('players','PlayerController@createPlayer');
	$app->put('players/{id}','PlayerController@updatePlayer');
	$app->delete('players/{id}','PlayerController@deletePlayer');
});