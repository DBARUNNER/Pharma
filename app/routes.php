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

/*
| Login route 
*/ 

Route::get('/',array(
	'as'	=>	'login-get',
	'uses'	=> 'loginController@loginGet'
	
	));

Route::post('login',array(
	'as'	=> 'login-post',
	'uses'	=> 'loginController@loginPost'
	));

Route::get('login',array(
	'as'	=> 'login-get',
	'uses'	=> 'loginController@loginGet'
	
	));

	
Route::get('register',array(
	'as'	=> 'create-account-get',
	'uses'	=> 'accountController@registerGet'
));

Route::post('register',array(
	'as'	=> 'create-account-post',
	'uses'	=> 'accountController@createPost'

	));



Route::get('import', array(
	'as' 	=> 'import-get',
	'uses'	=> 'importController@importGet'
	));
// Sales Rout::::::
Route::get('sales', array(
	'as' 	=> 'sales-get',
	'uses'	=> 'salesController@salesGet'
	));

//Lock Screen Rout:::

Route::get('lock',array(
	'as'	=> 'lock-get',
	'uses'	=> 'importController@lockGet'
	));
