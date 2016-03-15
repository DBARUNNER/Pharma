<?php

	/**
	* 
	*/
	class salesController extends BaseController
	{
		public function salesGet() {
			$customer = person::where('person_type','customer')->get();

			// person who dont pay more than one week 
			$date = date("Y-m-d");
			$dontPay 	= DB::select('SELECT * FROM bill where (select datediff("'.$date.'", created_at ) = 5 )');	
			 
			$msgNumber 	= count($dontPay);
			$type 		= 'loan';
			return View::make('sales',array(
				'customers' => $customer,
				'expire'	=> '',
				'msgNumber'	=> 0,
				'dontPay'	=> $dontPay,
				'Number'	=> $msgNumber,
				'type'		=> $type
					
				));
		}


		// register customer 

		public function registerCustomerPost() {
			$firstName 		= Input::get('firstName');
			$address 		= Input::get('address');
			$phone 			= Input::get('phone');
			$email 			= Input::get('email');
			$person_type 	= 'customer';

			$person = new person;
			$person->name 	= $firstName;
			$person->person_type = $person_type;
			$person->phone 				= $phone;
			$person->address 			= $address;
			$person->email 				= $email;

			if($person->save()) {
				return Redirect::route('sales-get')
						->with('success','customer have been registered successfully!');
			}else {
				return Redirect::route('sales-get')
						->with('error','Something is wrong please try again');
			}

		}


		/*
		| SALES TO CUSTOMER 
		*/ 

		public function salesToCustomer(){
			// $material 		= array('Siftrakson','Afghanistan','12','paid','2010-10-10','2011-10-10','1000','8 grm','30',)
			$material 		= Input::get('material');
			$loan 	  		= Input::get('remain');
			$paid 	  		= Input::get('pay');
			$total    		= Input::get('all');
			$suplier_id 	= Input::get('suplier_id');
			$date 	  		= date("Y-m-d");
			$bill_type 		= '';
			$person_type 	= Input::get('person_type');
			if($person_type == 'Agency') {
				$bill_type 		= 'agencySell';
			}else {
				$bill_type  	= 'customerSell';
			}

			if (count($material) < 1) {
				return "Insert your Materials first Please!";
			}else {


			
			$bill 	  		= new bill;
			$bill->date 		= $date;
			$bill->bill_total 	= $total;
			$bill->loan 		= $loan;
			$bill->cash 		= $paid;
			$bill->bill_type	= $bill_type;
			$bill->person_id 	= $suplier_id;
			$bill->save();

			$bill_id = Bill::latest('id')->first();
			$bill_id = $bill_id->id;
			
			
			$num_elements = 0;
			while ($num_elements < count($material)) {
				$medicin = new sale;
				$medicin->generic_name 		= $material[$num_elements];
				$num_elements++;
				$medicin->madein 			= $material[$num_elements];
				$num_elements++;
				$medicin->quantity			= $material[$num_elements];
				$num_elements++;
				$medicin->status 			= $material[$num_elements];
				$num_elements++;
				$medicin->product_date 		= $material[$num_elements];
				$num_elements++;
				$medicin->expire_date  		= $material[$num_elements];
				$num_elements++;
				$medicin->price 	   		= $material[$num_elements];
				$num_elements++;
				$medicin->weight 			= $material[$num_elements];
				$num_elements++;
				$medicin->barcode  			= $material[$num_elements];
				$num_elements++;
				$medicin->total_price   	= $material[$num_elements];
				$medicin->bill_id = 		$bill_id; 
				$medicin->save();
				$num_elements++;
			}

			return "Bill have Transfared successfully!";

			}

		}


		/*
		| RETRIEVE DATE BASE ON BATCH NUMBER 
		*/ 

		public function retrieveDate() {
			$batchNumber = Input::get('batchNumber');
			$stock 		 = medicin::where('barcode',$batchNumber)->first();
			 
			
                return '<div id="sales-content-bill">
                  <div class="form-group">
                    <label for="name" class="col-sm-3 control-label">Genric Name</label>
                    <div class="col-sm-9">
                      <input class="form-control" id="name" name="name" type="text" value='.$stock->generic_name.'>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="madIn" class="col-sm-3 control-label">Made in</label>
                    <div class="col-sm-9">
                      <input class="form-control" id="madIn" name="madeIn" type="text" value='.$stock->madein.'>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="weight" class="col-sm-3 control-label">Weight</label>
                    <div class="col-sm-9">
                      <input class="form-control" id="weight" name="weight" type="text" value='.$stock->weight.'>
                    </div>
                  </div>         
                  <div class="form-group">
                    <label for="amount" class="col-sm-3 control-label">Quantity</label>
                    <div class="col-sm-9">
                      <input class="form-control" id="amount" name="amount" type="number" value='.$stock->quantity.'>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="price" class="col-sm-3 control-label">Price</label>
                    <div class="col-sm-9">
                      <input onblur="total();" class="form-control" id="price" name="price" type="number" value='.$stock->price.'>
                    </div>
                  </div>
                  <div class="form-group" style="display: none;">
                    <label for="Tatal Price" class="col-sm-3 control-label">Total Price</label>
                    <div class="col-sm-9">
                      <input class="form-control" id="totalPrice" name="TotalPrice" type="number">
                    </div>
                  </div>  
                  <div class="form-group">
                    <label for="date" class="col-sm-3 control-label">Product Date</label>
                    <div class="col-sm-9">
                      <input class="form-control" id="productDate" name="product_date" type="date" value='.$stock->product_date.'>
                    </div>
                  </div> 
                  <div class="form-group">
                    <label for="date" class="col-sm-3 control-label">Expire Date</label>
                    <div class="col-sm-9">
                      <input class="form-control" id="expireDate" name="expire_date" type="date"  value='.$stock->expire_date.'>
                    </div>
                  </div>  
                  <div class="form-group">
                    <label for="status" class="col-sm-3 control-label">Status</label>
                    <div class="col-sm-9">
                      <select class="form-control" id="status" name="status">
                        <option>Paid</option>
                        <option>Unpaid</option>
                      </select>
                    </div>
                  </div> 
                </div>';
				
		}


		/*
		| LIST AGENT BY AJAX COMMANDN 
		*/ 

		public function listAgent() {
			$employees = employee::where('type','Agent')->get();
			$x = '';
			foreach ($employees as $value) {
				$x .= '<tr>
							<td>'.$value->id.'</td>
							<td>'.$value->name.'</td>
							<td>'.$value->phoneNumber.'</td>
							<td>'.$value->address.'</td>
							<td>'.$value->email.'</td>
							<td><a onclick="setAgentId('.$value->id.')" class="md-trigger import" data-toggle="modal" data-target="#agencyModal">Register</a></td>
						</tr>';	
			}
			return $x; 
		}


		/*
		| REGISTER AGENCY SET EMPLOYE ON IT 
		*/ 

		public function registerAgencyPost() {

			$name 		= Input::get('name');
			$phone 		= Input::get('phone');
			$address 	= Input::get('address');
			$email 		= Input::get('email');
			$id 		= Input::get('id');

			$person 				= new person;
			$person->name 			= $name;
			$person->person_type	= 'agent';
			$person->phone 			= $phone;
			$person->address 		= $address;
			$person->email 			= $email;
			$person->employee_id 	= $id;

			if($person->save()) {
				return Redirect::route('sales-get')
							->with('success','Agency have been registerd succefully!');
			}else {
				return Redirect::route('sales-get')
							->with('error','Sorry! something is wrong please try again');
			}
		}


		/*
		| LIST AGENCY TO SELL 
		*/ 

		public function listAgency() {
			$persons 	= person::where('person_type','agent')->get();
			$x = '';
			foreach ($persons as $value) {
				$x .= '<tr>
							<td>'.$value->id.'</td>
							<td>'.$value->name.'</td>
							<td>'.$value->address.'</td>
							<td>'.$value->phone.'</td>
							<td>'.$value->email.'</td>
							<td><a onclick="setName('.$value->id.');" class="md-trigger import" data-toggle="modal" data-target="#myModal"> Sale </a></td>
						</tr>';
			}

			return $x;
		}

		/*
		| SET AGENCY NAME 
		*/ 

		public function setAgencyName() {
			$id 			= Input::get('id');
			$person 		= person::where('id',$id)->first()->pluck('name');
			return $person;
		}

		/*
		| LIST CUSTOMERS IN CUSTOMERS SALES HISTORY 
		*/ 
		public function customerHistory() {

			$history = DB::table('bill')
						->join('person','person.id','=','bill.person_id')
						->select('bill.id','bill.date','bill.bill_total','bill.loan','bill.cash','person.name','person.phone')->where('bill.bill_type','customerSell')->get();
						$x = '';
				foreach ($history as $value) {
									$x .='<tr>
                    <td>'.$value->id.'</td>
                    <td>'.$value->name.'</td>
                    <td>'.$value->date.'</td>
                    <td>'.$value->phone.'</td>
                    <td><a class="md-trigger import" data-toggle="modal" data-target="#import-material" onclick="seeCustomerMaterial('.$value->id.');">See Materials</a></td>
                    <td>'.$value->bill_total.'</td>
                    <td>'.$value->cash.'</td>
                    <td>'.$value->loan.'</td>
                  </tr>';
				
					}
				return $x;

		}

		/*
		| SEE CUSTOMER MATERIALS AJAX 
		*/ 

		public function seeCustomerMaterials() {
			$id 			= Input::get('id');
			$materials 		= sale::where('bill_id',$id)->get();
			$x = '';
			foreach ($materials as $value) {
				$x .='<tr>
					<td>'.$value->generic_name.'</td>
					<td>'.$value->madein.'</td>
					<td>'.$value->quantity.'</td>
					<td>'.$value->status.'</td>
					<td>'.$value->product_date.'</td>
					<td>'.$value->expire_date.'</td>
					<td>'.$value->price.'</td>
					<td>'.$value->barcode.'</td>
					<td>'.$value->weight.'</td>
				</tr>';
			}
			return $x; 
		}

		/*
		| AGHENCY SELLES HISTORY AJAX 
		*/ 

		public function agencyHistory() {
		
			$history = DB::table('bill')
						->join('person','person.id','=','bill.person_id')
						->select('bill.id','bill.date','bill.bill_total','bill.loan','bill.cash','person.name','person.phone')->where('bill.bill_type','agencySell')->get();
						$x = '';
				foreach ($history as $value) {
									$x .='<tr>
                    <td>'.$value->id.'</td>
                    <td>'.$value->name.'</td>
                    <td>'.$value->date.'</td>
                    <td>'.$value->phone.'</td>
                    <td><a class="md-trigger import" data-toggle="modal" data-target="#import-material" onclick="seeCustomerMaterial('.$value->id.');">See Materials</a></td>
                    <td>'.$value->bill_total.'</td>
                    <td>'.$value->cash.'</td>
                    <td>'.$value->loan.'</td>
                  </tr>';
				
					}
				return $x;
		}

		/*
		| MINES SALESS QUNATITY FROM STOCK 
		*/ 

		public function minesQuantity() {
			$batchNumber  	= Input::get('batchNumber');
			$quantity 		= Input::get('quantity');
			$price 			= Input::get('price');
			$stock 			= medicin::where('barcode',$batchNumber)->first();
			$stock 			= $stock->quantity;
			if($stock < 1) {
				return "this medicine have finished from stock!";
			}
			elseif ($stock < $quantity) {
				return "we dont have that much medicine in stock!";
			}else {
				
				$stock 				= $stock - $quantity ;
				$totalPrice 		= $stock * $price; 
				$affectedRows = medicin::where('barcode', '=', $batchNumber)->update(array('quantity' => $stock,'total_price' => $totalPrice));	
				return "Minuse have done!";	
			}
		}

	}


?>