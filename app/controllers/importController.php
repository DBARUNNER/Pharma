<?php 

	/**
	* 
	*/
	class importController extends BaseController
	{
		

		/*
		| MAIN FUNCTION TO SHOW ALL THE 
		*/ 

		public function importGet() {
			return View::make('import');
		}



		// lock Screen logical code

		public function lockGet() {
			return View::make('lock_screen');
		}

	}



?>