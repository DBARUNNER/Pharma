<?php

	/**
	* 
	*/
	class salesController extends BaseController
	{
		public function salesGet() {
			$customer = person::where('person_type','customer')->get();
			return View::make('sales',array(
				'customers' => $customer	
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
			
			$material 		= Input::get('material');
			$loan 	  		= Input::get('remain');
			$paid 	  		= Input::get('pay');
			$total    		= Input::get('all');
			$suplier_id 	= Input::get('suplier_id');
			$date 	  		= date("Y-m-d");
			$bill_type 		= 'sales';

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
	}


?>