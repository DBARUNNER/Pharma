<?php

	/**
	* 
	*/
	class employeeController extends BaseController
	{
		
		public function employeeGet() {
			return View::make('employee');
		}

		/*
		| REGISTER EMPLOYEE
		*/ 

		public function registerEmployee() {
			$validator 				= Validator::make(Input::all(),array(
				'name'				=> 'required',
				'fatherName'		=> 'required',
				'tazkiraNumber'		=> 'required',
				'address'			=> 'required',
				'phone'				=> 'required',
				'email'				=> 'required|email',
				'type'				=> 'required',
				'photo'				=> 'required|image|mimes:jpeg,jpg,bmp,png,gif|max:3000'
				));
			if($validator->fails()) {
				return Redirect::route('employee-get')
								->withErrors($validator)
								->withInput();
			}else {

			$name 			= Input::get('name');
			$fname 			= Input::get('fatherName');
			$tazkiraNo 		= Input::get('tazkiraNumber');
			$address 		= Input::get('address');
			$phone 			= Input::get('phone');
			$email 			= Input::get('email');
			$type 			= Input::get('type');
			$date 			= Input::get('hireDate');
			
			$employees = new employee;
			$employees->name 				= $name;
			$employees->fatherName 			= $fname;
			$employees->tazkiraNumber 		= $tazkiraNo;
			$employees->address 		    = $address;
			$employees->phoneNumber 		= $phone;
			$employees->email 				= $email;
			$employees->hireDate 			= $date;
			$employees->type 				= $type;
			$name 							= Input::file('photo')->getClientOriginalName();
			Input::file('photo')->move('assets/img/employee',$name);

			$employees->photo 				= 'assets/img/employee/'.$name;
			if($employees->save()) {

			return Redirect::route('employee-get')
							->with('success','Employee have been registered successfully!');
			}else {
				return Redirect::route('employee-get')
							->with('error','something is wrong please try again');
			}


		
		}
			
		}
	}

?>