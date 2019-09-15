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

Route::get('/', function () {
    return view('welcome');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Admin Route
Route::prefix('admin')->group(function () {
	Route::get('/home', 'AdminController@index')->name('dashboard');

	// User's Profile
	Route::get('/user/{id}', 'AdminController@getProfile')->name('user.profile');
});

