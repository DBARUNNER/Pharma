<?php

class accountController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function registerGet()
	{
		return View::make('register');
	}


	public function createPost() {
		$validator 	= Validator::make(Input::all(),
			array(

				'email'				=>'required|max:50|email|unique:users',
				'username'			=>'required|max:20|min:3|unique:users',
				'password'			=>'required|min:6',
				'password_again'	=> 'required|same:password'

				)
			);

		if($validator->fails()) {
			return Redirect::route('create-account-get')
					->withErrors($validator)
					->withInput();
		}else {
			$email 		= Input::get('email');
			$username 		= Input::get('username');
			$password 	= Input::get('password');

			// Activation code

			$code 		= str_random(60);

			$user 		= User::create(array(
					'email'			=> $email,
					'username' 		=> $username,
					'password'		=> Hash::make($password),
					'code'			=> $code,
					'active'		=> 0
				));

			if($user) {
				return "we create your account";
			}
		}
	}


}
