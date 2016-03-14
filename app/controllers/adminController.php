<?php

class adminController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$type 	= 'amdin';
		return View::make('admin',array(
			'type'	=> $type
			));
	}


	


}
