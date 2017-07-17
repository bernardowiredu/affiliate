<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('hello');
});


Route::get('checkmend', array('uses'=>'CheckmendController@getIndex'));
Route::get('imei-checker', array('uses'=>'ImeiController@getIndex'));
Route::get('request', array('uses'=>'RequestController@getIndex'));
Route::get('unlock-help', array('uses'=>'HelpController@getUnlock'));
Route::get('order-status', array('uses'=>'OrderController@getStatus'));
Route::get('dashboard', array('uses'=>'UserController@getDashboard'));
Route::get('order-history', array('uses'=>'OrderController@getHistory'));
Route::get('messages', array('uses'=>'MessageController@getIndex'));
Route::get('track-order', array('uses'=>'OrderController@getTrack'));
Route::get('unlock-request', array('uses'=>'RequestController@getUnlockRequest'));
Route::get('editprofile', array('uses'=>'UserController@getProfile'));
Route::get('report', array('uses'=>'HelpController@getReport'));
Route::get('FAQs', array('uses'=>'HelpController@getFAQs'));
Route::get('login', array('uses'=>'UserController@getLogin'));
Route::get('register', array('uses'=>'UserController@getRegister'));
Route::get('forgotten-password', array('uses'=>'UserController@getPassword'));
Route::post('user', array('uses'=>'UserController@postRegister'));
Route::post('login', array('uses'=>'UserController@postSignin'));
Route::post('forgotten-password', array('uses'=>'UserController@postForgottenPassword'));
Route::get('signout', array('uses'=>'UserController@getSignout'));
Route::get('products/{id}', array('uses'=>'CategoryController@getproducts'));
Route::get('product/{id}', array('uses'=>'ProductController@getProduct'));
Route::get('confirm-order', array('uses'=>'OrderController@getConfirm'));
Route::get('payments', array('uses'=>'PaymentController@getIndex'));
Route::get('delete/{id}', array('uses'=>'OrderController@getDelete'));
Route::get('search', array('uses'=>'ProductController@getProductSearch'));
Route::get('about-us', array('uses'=>'HelpController@getAbout'));
Route::get('privacy', array('uses'=>'HelpController@getPrivacy'));
Route::get('payments', array('uses'=>'PaymentController@getIndex'));
Route::get('payment-successful', array('uses'=>'PaymentController@getSuccess'));
Route::get('make-payment/{id}', array('uses'=>'OrderController@getPayment'));
Route::get('check_order', array('uses'=>'OrderController@getCheckOrder'));
Route::post('category', array('uses'=>'CategoryController@postCreate'));
Route::post('order', array('uses'=>'OrderController@postPayOrder'));
Route::post('payment', array('uses'=>'PaymentController@postPayed'));
Route::get('admin/categorys', array('uses'=>'CategoryController@getCategory'));

/*
*	
*ADMIN CONTROLLER
*
*/
Route::post('product', array('uses'=>'ProductController@postCreate'));
Route::post('network', array('uses'=>'NetworkController@postNetwork'));
Route::get('admin/dashboard', array('uses'=>'AdminController@getDashboard'));
Route::get('admin/users', array('uses'=>'AdminController@getAllUsers'));
Route::get('admin/messages', array('uses'=>'AdminController@getMessage'));
Route::get('admin/order', array('uses'=>'OrderController@getOrder'));
Route::get('admin/payments', array('uses'=>'PaymentController@getAll'));
Route::get('admin/unlock', array('uses'=>'RequestController@getAllRequest'));
Route::get('admin/add-product', array('uses'=>'ProductController@getAllPro'));