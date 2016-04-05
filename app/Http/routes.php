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
    return view('welcome');
});

// Authentication routes...
Route::get('login', 'Auth\AuthController@getLogin');
Route::post('login', 'Auth\AuthController@postLogin');
Route::get('logout', 'Auth\AuthController@getLogout');

// Password reset link request routes...
Route::get('password/email', 'Auth\PasswordController@getEmail');
Route::post('password/email', 'Auth\PasswordController@postEmail');

// Password reset routes...
Route::get('password/reset/{token}', 'Auth\PasswordController@getReset');
Route::post('password/reset', 'Auth\PasswordController@postReset');


/*
|--------------------------------------------------------------------------
| API routes
|--------------------------------------------------------------------------
*/

Route::group(['prefix' => 'api', 'namespace' => 'API'], function ()
{
	Route::group(['prefix' => 'v1'], function ()
	{
        require Config::get('generator.path_api_routes');
	});
});


Route::resource('subsidiaries', 'SubsidiaryController');

Route::get('subsidiaries/{id}/delete', [
    'as' => 'subsidiaries.delete',
    'uses' => 'SubsidiaryController@destroy',
]);


Route::resource('aseguradoras', 'AseguradoraController');

Route::get('aseguradoras/{id}/delete', [
    'as' => 'aseguradoras.delete',
    'uses' => 'AseguradoraController@destroy',
]);


Route::resource('colectivos', 'ColectivoController');

Route::get('colectivos/{id}/delete', [
    'as' => 'colectivos.delete',
    'uses' => 'ColectivoController@destroy',
]);


Route::resource('contratos', 'ContratosController');

Route::get('contratos/{id}/delete', [
    'as' => 'contratos.delete',
    'uses' => 'ContratosController@destroy',
]);


Route::resource('especialidadesExtranets', 'Especialidades_ExtranetController');

Route::get('especialidadesExtranets/{id}/delete', [
    'as' => 'especialidadesExtranets.delete',
    'uses' => 'Especialidades_ExtranetController@destroy',
]);


Route::resource('users', 'UserController');

Route::get('users/{id}/delete', [
    'as' => 'users.delete',
    'uses' => 'UserController@destroy',
]);
