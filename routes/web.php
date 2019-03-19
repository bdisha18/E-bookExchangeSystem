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

  //for Books
 Route::group(['namespace' => 'Backend', 'prefix' => 'admin/book'], function() {
    Route::get('/index', 'BookController@index')->name('book.index');
    Route::post('/status/{id}', 'BookController@status')
    ->name('book.status');
    Route::get('/create','BookController@create')->name('book.create');
    Route::post('/store','BookController@store')->name('book.store');
     Route::get('/view/{id}', 'BookController@view')->name('book.view');
     Route::get('/edit/{id}', 'BookController@edit')->name('book.edit');
   Route::post('/update/{id}', 'BookController@update')->name('book.update');
    Route::delete('/delete/{id}', 'BookController@delete')->name('book.delete');
    
 });

//for Publisher
Route::group(['namespace' => 'Backend', 'prefix' => 'admin/publisher'],
function() {
    Route::get('/index', 'PublisherController@index')->name('publisher.index');
    Route::get('/create', 'PublisherController@create')->name('publisher.create');
    Route::post('/store', 'PublisherController@store')->name('publisher.store');
    Route::get('/view/{id}', 'PublisherController@view')->name('publisher.view');
    Route::get('/edit/{id}', 'PublisherController@edit')->name('publisher.edit');
    Route::post('/update/{id}', 'PublisherController@update')->name('publisher.update');
    Route::delete('/delete/{id}', 'PublisherController@delete')->name('publisher.delete');
});
   
//for transaction
Route::group(['namespace' => 'Backend', 'prefix' => 'admin/transaction'],
function() {
    Route::get('/index', 'TransactionController@index')->name('transaction.index');
    Route::post('/status/{id}', 'TransactionController@status')
    ->name('transaction.status');
    Route::get('/view/{id}', 'TransactionController@view')->name('transaction.view');
    Route::get('/edit/{id}', 'TransactionController@edit')->name('transaction.edit');
    Route::post('/update/{id}', 'TransactionController@update')->name('transaction.update');
    Route::delete('/delete/{id}', 'TransactionController@delete')->name('transaction.delete');
});

//for offers
Route::group(['namespace' => 'Backend', 'prefix' => 'admin/offer'],
function() {
    Route::get('/index', 'OfferController@index')->name('offer.index');
    Route::post('/status/{id}', 'OfferController@status')
    ->name('offer.status');
        Route::get('/create', 'OfferController@create')->name('offer.create');
    Route::post('/store', 'OfferController@store')->name('offer.store');

    Route::get('/view/{id}', 'OfferController@view')->name('offer.view');
    Route::get('/edit/{id}', 'OfferController@edit')->name('offer.edit');
    Route::post('/update/{id}', 'OfferController@update')->name('offer.update');
    Route::delete('/delete/{id}', 'OfferController@delete')->name('offer.delete');
});




