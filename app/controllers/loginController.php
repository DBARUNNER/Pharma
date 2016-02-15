<?php

	/**
	* 
	*/
	class loginController extends BaseController
	{
		// login get to show the page

		public function loginGet() {
			return View::make('login');
		}


		// login post to athunticate the user 

		public function loginPost() {

		}
	}


?>