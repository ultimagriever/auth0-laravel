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

Route::get('/auth0/callback', '\Auth0\Login\Auth0Controller@callback');

Auth::routes();

Route::get('/', 'HomeController@index');
