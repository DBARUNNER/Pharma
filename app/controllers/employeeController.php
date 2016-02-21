<?php

	/**
	* 
	*/
	class employeeController extends BaseController
	{
		
		public function employeeGet() {
			return View::make('employee');
		}
	}

?>