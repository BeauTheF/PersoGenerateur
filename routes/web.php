<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/', "UserController@index");

Route::group(["prefix"=>"/users", "where"=>["user"=>"[0-9]+"]], function () {
    Route::get("/",							"UserController@index");
	Route::get("/create",					"UserController@create");
	Route::post("/create",					"UserController@store");
	Route::get("/{user}",					"UserController@show");
	Route::get("/{user}/edit",				"UserController@edit")
        ->middleware('auth')
        ->middleware('can:canMofiy');
	Route::post("/{user}/edit",				"UserController@update")
        ->middleware('auth')
        ->middleware('can:canMofiy');
	Route::get("/{user}/destroy",			"UserController@destroy")
        ->middleware('auth')
        ->middleware('can:canMofiy');
});


Route::get('/creation','PersonnageController@create');

Route::get('/reset','AppController@reset');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
