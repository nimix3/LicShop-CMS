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
    return view('index');
});
Route::get('/index', function () {
    return view('index');
});
Route::get('/product','ProductController@index');
Route::get('/aboutus','AboutUsController@index');
Route::get('/support','SupportController@index');
Route::get('/getsoftware','GetSoftwareController@index');
Route::get('/order/{id}','ProductController@view_order');
Route::post('/order/','ProductController@order');
Route::resource('cart', 'CartController');
Route::delete('emptyCart', 'CartController@emptyCart');
Route::post('switchToWishlist/{id}', 'CartController@switchToWishlist');

Route::resource('wishlist', 'WishlistController');
Route::delete('emptyWishlist', 'WishlistController@emptyWishlist');
Route::post('switchToCart/{id}', 'WishlistController@switchToCart');

Route::get('/admin', function () {
    return view('admin/index');
});

//Routing
Route::group(['middleware'=>'auth','prefix' => 'admin'],function (){

    Route::get('/product','ProductController@all');
    Route::get('/product/add','ProductController@create');
    Route::post('/product/store','ProductController@store');
    Route::get('product/edit/{id}','ProductController@edit');
    Route::get('product/delete/{id}','ProductController@delete');
    Route::post('product/update','ProductController@update');
    Route::get('/serial','SerialController@index');
    Route::get('/serial/add','SerialController@create');



});

Auth::routes();

Route::get('/home', 'HomeController@index');
