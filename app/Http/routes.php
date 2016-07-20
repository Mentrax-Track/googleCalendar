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

Route::get('/', [
    'uses'=>'HomeController@index',
    'as' => 'home'
    ]);

Route::get('inicio-de-sesion', [
    'uses'=>'Auth\AuthController@getLogin',
    'as'  => 'login'
    ]);
Route::post('inicio-de-sesion', 'Auth\AuthController@postLogin');

Route::get('salir', [
    'uses'=> 'Auth\AuthController@getLogout',
    'as'  => 'logout'
    ]);

// Registration routes...
Route::get('registro', [
    'uses'=>'Auth\AuthController@getRegister',
    'as'  => 'register'
    ]);
Route::post('registro', 'Auth\AuthController@postRegister');


// Password reset link request routes...
Route::get('password/email', 'Auth\PasswordController@getEmail');
Route::post('password/email', 'Auth\PasswordController@postEmail');

// Password reset routes...
Route::get('password/reset/{token}', 'Auth\PasswordController@getReset');
Route::post('password/reset', 'Auth\PasswordController@postReset');






Route::group(['middleware'=>'auth'],function(){
    
    Route::get('account', function(){
        return view('account');
    });

});




