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
| un authinticate route Group
*/ 
Route::group(array('before' => 'guest'), function(){




	Route::get('/',array(
		'as'	=>	'login-get',
		'uses'	=> 'accountController@loginGet'
		
		));

	// access the login page
	Route::get('login',array(
	'as'	=> 'login-get',
	'uses'	=> 'accountController@loginGet'
	
	));


	// Activate Account 

		Route::get('account/activate/{code}',array(
			'as'	=> 'account-activate-get',
			'uses'	=> 'accountController@accountActivate'
		));


	/*
	|CRF Protection Group or post route which is not authinticate
	*/ 

	Route::group(array('before' => 'csrf'),function(){
		
			/*
			| POST ROUTE TO LOGIN 
			*/ 
			Route::post('login',array(
				'as'	=> 'login-post',
				'uses'	=> 'accountController@loginPost'
			
			));



	});

});







/*
|--------------------------------------------------------------------------
| Authinticat route
|--------------------------------------------------------------------------
|
|The Following route is accessable only to authinticated users
|
|
*/

// Route::group(array('before'=> 'auth'), function(){

	

Route::group(array('before'=> 'csrf'), function(){




});	


	// post change password
	Route::post('change-password',array(
		'as'	=> 'change-password',
		'uses'	=> 'accountController@changePassword'
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


	Route::get('register',array(
		'as'	=> 'create-account-get',
		'uses'	=> 'accountController@registerGet'
	));

	Route::post('register',array(
		'as'	=> 'create-account-post',
		'uses'	=> 'accountController@createPost'

		));

	Route::get('logout',array(
		'as'	=> 'logout-get',
		'uses'	=> 'accountController@logoutGet'
		
		));

	

