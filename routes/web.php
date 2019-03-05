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


Route::group(['prefix' => 'admin', 'namespace' => 'Backend' ], function() {
    Route::get('/dashboard', 'AdminController@index')->name('admin.dashboard');

});

// for User
Route::group(['namespace' => 'Backend', 'prefix' => 'admin/user'], function() {
    Route::get('/index', 'UserController@index')->name('user.index');
    Route::post('/status/{id}', 'UserController@status')
    ->name('user.status');
   	Route::get('/store', 'UserController@store')->name('user.store');
    Route::get('/view', 'UserController@view')->name('user.view');
    // Route::get('/edit', 'UserController@edit')->name('user.edit');
    // Route::get('/update', 'UserController@update')->name('user.update');
    // Route::get('/delete', 'UserController@delete')->name('user.delete');
    
});



