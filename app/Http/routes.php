<?php
// Authentication routes...
Route::get('/home', 'UserController@home');
Route::get('/home/{id}', 'UserController@home');
Route::get('/', 'Auth\AuthController@getLogin');
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');


$router->resource('contacts'
        ,'ContactsController'
        //,['only' => ['add','edit','view']]
        //,['except' => ['add']]
        
        );