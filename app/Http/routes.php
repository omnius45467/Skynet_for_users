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

Route::get('/', 'PagesController@index');
Route::get('/home', 'PagesController@index');
Route::get('/about', 'PagesController@about');
Route::get('/contacts', 'PagesController@contacts');
Route::get('/app', 'PagesController@app');
Route::get('/portfolio', 'PagesController@portfolio');

Route::filter('admin', function()
{
    // check the current user
    if (!Entrust::hasRole('admin')) {
        return redirect('/login');
    }
});

// only owners will have access to routes within admin/advanced
Route::when('/dashboard', 'admin');
Route::when('/tracker', 'admin');
Route::when('/reports', 'admin');
Route::when('/wall', 'admin');

Route::when('/wall/create', 'admin');

//
Route::get('/dashboard', 'DashboardController@index');
Route::get('/tracker', 'TrackerController@index');
Route::get('/reports', 'ReportController@index');

Route::get('/profile/{id}', 'ProfileController@show');
Route::get('/profile/create', 'ProfileController@create');
Route::get('/profile/{id}/edit', 'ProfileController@edit');

Route::get('/wall', 'WallController@index');
Route::get('/wall/create', 'WallController@create');


// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');


// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

Route::get('/login', function(){
    return view('auth/login');
    
});
