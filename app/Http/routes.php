<?php

 

// Authentication routes...
Route::get('/', 'UserController@home');
Route::get('/home', 'UserController@home');
Route::get('/home/{id}', 'UserController@home');
 
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

$router->get('/contacts/store','ContactsController@createcontact');

$router->resource('contacts'
        ,'ContactsController'
        //,['only' => ['edit','view','destroy','index']]
       // ,['except' => ['store']]
        
        );

