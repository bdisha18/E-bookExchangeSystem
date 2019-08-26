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






include 'admin.php';

Route::group(['namespace' => 'Frontend' ], function() {
Route::get('home/index', 'HomeController@index')->name('home.index');
Route::get('newsletter/store', 'HomeController@newsletter_store')->name('newsletter.store');
Route::get('login/index', 'LoginController@login')->name('user.login');
Route::post('login/store', 'LoginController@dologin')->name('user.dologin');
Route::get('register/index', 'LoginController@register')->name('user.register');
Route::post('register/store', 'LoginController@register_store')->name('register.store');
Route::get('user/logout', 'LoginController@logout')->name('user.logout');
});

Route::group(['prefix' => 'page', 'namespace' => 'Frontend', 'middleware' => 'user' ], function() {
Route::get('contact', 'PageController@contact')->name('user.contact');
Route::post('contact/store', 'PageController@contact_store')->name('contact.store');
});

Route::group(['prefix' => 'publish', 'namespace' => 'Frontend', 'middleware' => 'user' ], function() {
Route::get('create', 'PublishController@create')->name('publish.create');
Route::post('store', 'PublishController@store')->name('publish.store');
});

Route::group(['prefix' => 'cart', 'namespace' => 'Frontend', 'middleware' => 'user' ], function() {
Route::get('index', 'CartController@index')->name('cart.index');
Route::get('add/{id}', 'CartController@addToCart')->name('cart.add');
Route::get('delete/{id}', 'CartController@delete')->name('cart.delete');
Route::get('whishlist', 'CartController@whishlist')->name('cart.whishlist');
});

Route::group(['prefix' => 'product', 'namespace' => 'Frontend', 'middleware' => 'user' ], function() {
Route::get('categories', 'ProductController@category')->name('product.category');
Route::get('index/{id}', 'ProductController@index')->name('product.index');
Route::get('list/{id?}', 'ProductController@list')->name('product.list');
Route::get('audiobook-list/{id?}', 'ProductController@audiobook_list')->name('audiobook.list');
Route::get('magazines', 'ProductController@magazine')->name('magazine.category');
Route::get('audiobooks', 'ProductController@audiobook')->name('audiobook.category');
});

Route::group(['prefix' => 'document', 'namespace' => 'Frontend', 'middleware' => 'user' ], function() {
 Route::get('categories', 'DocumentController@category')->name('document.category');
// Route::get('index/{id}', 'DocumentController@index')->name('document.index');
// Route::get('list/{id?}', 'DocumentController@list')->name('document.list');
});


Route::group(['prefix' => 'user', 'namespace' => 'Frontend', 'middleware' => 'user' ], function() {

Route::get('index', 'UserController@index')->name('user.index');
Route::get('edit', 'UserController@edit')->name('user.edit');
Route::post('update', 'UserController@update')->name('user.update');
Route::get('password/edit', 'UserController@edit_password')->name('password.edit');
Route::post('password/update', 'UserController@update_password')->name('password.update');
Route::post('interest/update/{id}', 'UserController@interest_update')->name('interest.update');
});

Route::group(['prefix' => 'address', 'namespace' => 'Frontend', 'middleware' => 'user' ], function() {
Route::get('index/{id?}', 'AddressController@index')->name('address.index');
Route::post('store', 'AddressController@store')->name('address.store');
Route::post('update/{id}', 'AddressController@update')->name('address.update');
Route::get('delete/{id}', 'AddressController@delete')->name('address.delete');
	
});

Route::group(['prefix' => 'card', 'namespace' => 'Frontend', 'middleware' => 'user' ], function() {
Route::get('index', 'CardController@index')->name('card.index');
Route::post('store', 'CardController@store')->name('card.store');
Route::post('update/{id}', 'CardController@update')->name('card.update');
Route::get('delete/{id}', 'CardController@delete')->name('card.delete');
	
});

Route::group(['prefix' => 'secondhand', 'namespace' => 'Frontend', 'middleware' => 'user' ], function() {
Route::get('index', 'SecondHandController@index')->name('second.index');
Route::post('store', 'SecondHandController@store')->name('second.store');
	
});

Route::group(['prefix' => 'order', 'namespace' => 'Frontend', 'middleware' => 'user' ], function() {
Route::get('index', 'OrderController@index')->name('order.index');
});

Route::group(['prefix' => 'favorite', 'namespace' => 'Frontend', 'middleware' => 'user' ], function() {
Route::post('update/{id?}', 'HomeController@favorite_update')->name('favorite.update');
});

Route::group(['prefix' => 'payment', 'namespace' => 'Frontend', 'middleware' => 'user' ], function() {
Route::get('product-detail', 'PaymentController@productDetail')->name('payment.productdetail');
Route::get('address', 'PaymentController@address')->name('payment.address');
Route::post('address/update/{id}', 'PaymentController@address_update')->name('payment.address.update');

});



















