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
				Mail::send('emails.auth.activate',array('link'=> URL::route('account-activate-get',$code), 'username' => $username), function($message) use ($user){
					$message->to($user->email, $user->username)->subject('Active your account');
				});

				return Redirect::route('create-account-get')
						->with('global','We have send email to activate your account');
			}else {

				return Redirect::route('create-account-get')
						->with('global','sorry something is wrong please try again!');
			}
		}
	}


	public function accountActivate($code) {
		$user 	= User::where('code',$code)->where('active',0);

		if($user->count()) {

			$user = $user->first();

			// Update user to active state

			$user->active = 1;
			$user->code = '';
			
			if($user->save()) {

				return Redirect::route('create-account-get')
						->with('global',"<sapn style='color:blue;'>Your account activated successfully!</span>");
			}else {

				 return Redirect::route('create-account-get')
				 		->with('global',"<span style='color:red;'>We could not Active your account!");
			}


		}
	}




	/*
	| AUTHINTICATE USER 
	*/ 

	public function loginGet() {
		return View::make('login');
	}

	public function loginPost() {
		$validator 	= Validator::make(Input::all(),array(
			'email'	=> 'required|email',
			'password'	=> 'required'
			));

		if($validator->fails()) {
			return Redirect::route('login-get')
					->withErrors($validator)
					->withInput();
		}else {
			$auth 	= Auth::attempt(array(

				'email' 			=> Input::get('email'),
				'password' 			=> Input::get('password'),
				'active'			=> 1
				));

			if($auth) {
				 return Redirect::route('import-get');

			}else {
				return Redirect::route('login-get')
						->with('global','combination Passwor and Email wrong');
			}
		}
	}


	// Sign out the user 


	public function logoutGet() {
		Auth::logout();
		return Redirect::route('login-get');
	}
}
