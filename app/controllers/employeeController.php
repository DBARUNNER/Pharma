<?php

	/**
	* 
	*/
	class employeeController extends BaseController
	{
		
		public function employeeGet() {
			$type = 'employee';
			return View::make('employee',array(
				'expire'	=> '',
				'msgNumber'	=> 0,
				'type' => $type
				));
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

		/*
		| EMPLOYEE HISTORY LOGIC CODE
		*/ 

		public function employeeHistoy() {
			$employees 	= employee::where('type','=','Employee')->get();
			$x = '';
			foreach ($employees as $value) {
				$x .= '<tr>
							<td>'.$value->id.'</td>
							<td>'.$value->name.'</td>
							<td>'.$value->fatherName.'</td>
							<td>'.$value->hireDate.'</td>
							<td>'.$value->address.'</td>
							<td><a onclick="editEmployee('.$value->id.')" class="md-trigger import" data-toggle="modal" data-target="#editModal"><i class="fa fa-edit"></i></a></td>
							<td><a onclick="deletEmployee('.$value->id.')"><i class="fa fa-times"></i></a></td>
					  </tr>';
			}
			return $x;
		}


		/*
		| LIST EMPLOYEE INFORMAITON TO EDIT 
		*/ 

		public function editEmployeeAjax(){
			$id = Input::get('id');

			$employees = employee::where('id',$id)->first();

					return '

							<div class="form-group has-success" style="display:none;">
                                <label class="control-label" for="id">Employee Name</label>
                                <input class="form-control" id="id" name="id" type="text" required="required" value='.$employees->id.'>
                            </div>

                            <div class="form-group has-success">
                                <label class="control-label" for="name">Employee Name</label>
                                <input class="form-control" id="name" name="name" type="text" required="required" value='.$employees->name.'>
                            </div>

                            <div class="form-group has-success">
                                <label class="control-label" for="fatherName">Father Name</label>
                                <input class="form-control" id="fatherName" name="fname" type="text" required="required" value='.$employees->fatherName.'>
                            </div>

                            <div class="form-group has-success">
                                <label class="control-label" for="email">Employee Email</label>
                                <input class="form-control" id="email" name="email" type="email" required="required" value='.$employees->email.'>
                            </div>

                             <div class="form-group has-success">
                                <label class="control-label" for="phone">Employee Phone</label>
                                <input class="form-control" id="phone" name="phoneNumber" type="number" required="required" value='.$employees->phoneNumber.'>
                            </div>   

                            <div class="form-group has-success">
                                <label class="control-label" for="address">Employee address</label>
                                <input class="form-control" id="address" name="address" type="text" required="required" value='.$employees->address.'>
                            </div>';
			
		}

		/*
		| EDIT EMPLOYEE INFORMATION 
		*/ 

		public function editEmployee() {
			$id			 = Input::get('id');
			$name 		 = Input::get('name');
			$fname 		 = Input::get('fname');
			$email 		 = Input::get('email');
			$phoneNo 	 = Input::get('phoneNumber');
			$address 	 = Input::get('address');

			$employee 	 			= employee::find($id);
			$employee->name 		= $name;
			$employee->fatherName  	= $fname;
			$employee->email 		= $email;
			$employee->phoneNumber  = $phoneNo;
			$employee->address      = $address;
			if($employee->save()) {
				return Redirect::route('employee-get')
								->with('success','Employee Information have been updated successfully!');
			}else {

				return Redirect::route('employee-get')
								->with('error','Something is wrong please try again!');
			}
		}

		/*
		| DELETE EMPLOYEE AJAX 
		*/ 

		public function deletEmployee() {
			$id 			= Input::get('id');
			$employee 		= employee::find($id);
			if($employee->delete()) {
				return 1;
			}else {
				return 0;
			}
		}
	}

?>