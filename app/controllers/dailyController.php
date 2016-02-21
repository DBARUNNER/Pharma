<?php
	
	/**
	* 
	*/
	class dailyController extends BaseController
	{
		
		public function dailyGet(){
			return View::make('dailyPayment');
		}
	}
?>