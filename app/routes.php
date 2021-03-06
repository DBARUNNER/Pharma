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

			/*
			| RECOVER THE ACCOUNT 
			*/ 

			Route::post('accout/recover',array(
				'as'	=> 'recover-account-post',
				'uses'	=> 'accountController@recoverPassword'
				));

			/*
			| Emaol route is here to recover password 
			*/ 

			Route::get('account/recover/{code}', array(
				'as'	=> 'account-recover-get',
				'uses'	=> 'accountController@getRecover'
				));	


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

	

// Route::group(array('before'=> 'auth'), function(){






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

		// Employee Rout::
	Route::get('employee', array(
		'as' 	=> 'employee-get',
		'uses'	=> 'employeeController@employeeGet'
		));

	// Home Rout::
	Route::get('home', array(
		'as' 	=> 'home-get',
		'uses'	=> 'homeController@homeGet'
		));

	// Stock Rout::
	Route::get('stock', array(
		'as' 	=> 'stock-get',
		'uses'	=> 'stockController@stockGet'
		));

	//Daily Payment Rout::
	Route::get('daily', array(
		'as' 	=> 'daily-get',
		'uses'	=> 'dailyController@dailyGet'
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


	Route::get('logout',array(
		'as'	=> 'logout-get',
		'uses'	=> 'accountController@logoutGet'
		
		));

	

Route::group(array('before' => 'csrf'), function() {



	// Register new user to use the system 
	Route::post('register',array(
		'as'	=> 'create-account-post',
		'uses'	=> 'accountController@createPost'

		));



});

	

	// Register new suplier
	Route::post('register/suplier',array(
		'as'	=> 'register-suplier-post',
		'uses'	=> 'importController@registerSuplier'

		)); 

	// Admin route is all here 

	Route::get('admin',array(
		'as'	=> 'admin-get',
		'uses'	=> 'adminController@index'
		));


	// Route to List Suplier		
	Route::get('listSuplier','importController@listSuplier');

	// Route import bill from suplier 
	Route::post('importFromSuplier', array(
		'as'	=> 'import-from-suplier',
		'uses'	=> 'importController@importFromSuplier'
		));

	// import history route 
	Route::get('importHistory',array(
		'as'	=> 'import-history-get',
		'uses'	=> 'importController@importHistory'
		
		));
	// see import material based on bill id 
	Route::post('setImportMaterial',array(
		'as'	=> 'see-import-material',
		'uses'	=> 'importController@seeImportMaterial'
		));

	/*
	| IMPORT AJAX ROUTE 
	*/ 

	Route::post('setSuplierName',array(
		'as' 	=> 'set-suplier-name-ajax',
		'uses'	=> 'importController@setSuplierName'
		));

	/*=============================================================
	| SALES PAGE ROUTE 
	*==============================================================*/
	
	Route::post('registerCustomer',array(
		'as'	=> 'register-customer-post',
		'uses'	=> 'salesController@registerCustomerPost'
		));

	/*
	| SALES AJAX ROUTE 
	*/ 

	Route::post('salesToCustomer',array(
		'as'	=> 'sales-to-customer-ajax',
		'uses'	=> 'salesController@salesToCustomer'

		));

	// Retrieve date 
	Route::post('retrieveDate',array(
		'as'	=> 'retrieve-date-ajax',
		'uses'	=> 'salesController@retrieveDate'
		));

	// list Agent infromation 
	Route::get('listAgent',array(
		'as'	=> 'list-agent-ajax',
		'uses'	=> 'salesController@listAgent'
		));

	// Register Agency
	Route::post('registerAgency',array(
		'as'	=> 'register-agency-post',
		'uses'	=> 'salesController@registerAgencyPost'
		)); 
	// list Agency 
	Route::get('selAgency',array(
		'as' 	=> 'list-agency-ajax',
		'uses'	=> 'salesController@listAgency'
		));

	// set Agency name
	Route::post('setAgencyName',array(
		'as'	=> 'set-agencyName-ajax',
		'uses'	=> 'salesController@setAgencyName'
		));

	// CUSTOMER SALLES AGENCY ROUTE 
	Route::get('salesHistory',array(
		'as'	=> 'customer-sales-history-ajax',
		'uses'	=> 'salesController@customerHistory'
		));
	// LIST OF CUSTOMER MATERIALS 
	Route::post('customerMaterial',array(
		'as'	=> 'list-customer-material-ajax',
		'uses'	=> 'salesController@seeCustomerMaterials'
		
		));	

	// AJENCY SALESS HISTOYR 
	Route::get('agencyHistory',array(
		'as'	=> 'agency-history-ajax',
		'uses'	=> 'salesController@agencyHistory'
		));
	// MIN QUNTITY OF SALESS FROM STOCK 
	Route::post('minQuantity',array(
		'as'	=> 'mines-quntity-ajax',
		'uses'	=> 'salesController@minesQuantity'
		));

	/*=============================================================
	| Employee route is all here 
	*==============================================================*/

	Route::post('registerEmployee',array(
		'as'	=> 'retister-employee-post',
		'uses'	=> 'employeeController@registerEmployee'
		
		));

	Route::post('editEmployee',array(
		'as'	=> 'edit-employee-post',
		'uses'	=> 'employeeController@editEmployee'
		));

	// employee history ajax
	Route::get('employeeHistory',array(
		'as'	=> 'employee-history-ajax',
		'uses'	=> 'employeeController@employeeHistoy'
		));

	// Edit employee list information post ajax 
	Route::post('editEmployeeList',array(
		'as'	=> 'employee-edit-ajax',
		'uses'	=> 'employeeController@editEmployeeAjax'
		));

	// Delet employee 
	Route::post('deletEmployee',array(
		'as'	=> 'delet-employee-ajax',
		'uses'	=> 'employeeController@deletEmployee'
		));
	/*=============================================================
	| Stock route is all here
	*==============================================================*/
	
	Route::get('stockStatus',array(
		'as'	=> 'stock-status-ajax',
		'uses'	=> 'stockController@stockStatus'
		));

	// Medicine status ajax route
	Route::get('medicinStatus',array(
		'as'	=> 'medicine-status-ajax',
		'uses'	=> 'stockController@medicineStatus'
		));

	

	/*=============================================================
	| Dailly payment routes
	*==============================================================*/
	Route::post('dailyPayments',array(
		'as'	=> 'daily-payment-post',
		'uses'	=> 'dailyController@dailyPayments'
		));

	Route::get('dailyHistory',array(
		'as'	=> 'daily-history-ajaz',
		'uses'	=> 'dailyController@dailyHistory'
		));

	/*
	| Expire medicin info in mode l
	*/

	Route::post('expireInfo',array(
		'as'	=> 'expire-info-ajax',
		'uses'	=> 'HomeController@expireInfo'
		));
	// all the expire medicine information 
	Route::get('expireInfoAll',array(
		'as'	=> 'expire-infoAll-ajax',
		'uses'	=> 'HomeController@expireInfoAll'
		));



// });	




