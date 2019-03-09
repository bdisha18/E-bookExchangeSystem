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

Auth::routes(['verify'=> true]);

Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');




Route::group(['prefix' => 'admin', 'namespace' => 'Backend' ], function() {
    Route::get('/dashboard', 'AdminController@dashboard')->name('admin.dashboard');


});

// for User
Route::group(['namespace' => 'Backend', 'prefix' => 'admin/user'], function() {
    Route::get('/index', 'UserController@index')->name('user.index');
    Route::post('/status/{id}', 'UserController@status')
    ->name('user.status');
   	Route::get('/store', 'UserController@store')->name('user.store');
    Route::get('/view/{id}', 'UserController@view')->name('user.view');
    Route::get('/edit/{id}', 'UserController@edit')->name('user.edit');
    Route::post('/update/{id}', 'UserController@update')->name('user.update');
    Route::get('/status', 'UserController@status')->name('user.status');
    // Route::get('/delete', 'UserController@delete')->name('user.delete');
});

// for Admin
Route::group(['namespace' => 'Backend', 'prefix' => 'admin/admin'], function() {
    Route::get('/index', 'AdminController@index')->name('admin.index');
    Route::post('/status/{id}', 'AdminController@status')
    ->name('admin.status');
    Route::get('/edit/{id}', 'AdminController@edit')->name('admin.edit');
    Route::post('/update/{id}', 'AdminController@update')->name('admin.update');
    Route::delete('/delete/{id}', 'AdminController@delete')->name('admin.delete');
    
});

// for Followers
Route::group(['namespace' => 'Backend', 'prefix' => 'admin/follower'], function() {
    Route::get('/index', 'FollowerController@index')->name('follower.index');
    Route::post('/status/{id}', 'FollowerController@status')
    ->name('follower.status');
    Route::get('/view/{id}', 'FollowerController@view')->name('follower.view');
    Route::get('/edit/{id}', 'FollowerController@edit')->name('follower.edit');
    Route::post('/update/{id}', 'FollowerController@update')->name('follower.update');
    Route::delete('/delete/{id}', 'FollowerController@delete')->name('follower.delete');
    
});




