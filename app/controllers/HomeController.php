<?php

	/**
	* 
	*/
	class homeController extends BaseController
	{
		
		public function homeGet(){
			return View::make('home');
		}
	}
?>