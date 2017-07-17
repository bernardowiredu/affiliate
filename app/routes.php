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
	return View::make('layout.index');
});

// courses routes



Route::get('masters',  array('uses' =>'CourseController@getIndex' ));
Route::get('diploma',  array('uses'=> 'CourseController@getDiploma'));
Route::get('undergraduate', array('uses' =>'CourseController@getUndergraduate'));

// [ How to apply route ] && [ track application route]

Route::get('apply', array('uses' => 'ApplyController@getIndex'));
Route::get('track_application',  array('uses'=>'ApplyController@getStatus'));

// [ contacts route]

Route::get('contact_us' , array('uses' => 'ContactController@getIndex'));