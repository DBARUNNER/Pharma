<?php 

	/**
	* 
	*/
	class importController extends BaseController
	{
		

		/*
		| MAIN FUNCTION TO SHOW ALL THE 
		*/ 

		public function importGet() {
			$suplierList = person::all();
			return View::make('import',array(
				'suplierList' => $suplierList
				));
		}



		// lock Screen logical code

		public function lockGet() {
			return View::make('lock_screen');
		}

		// Register new suplier 
		public function registerSuplier() {


		 	$firstName 				= Input::get('firstName');
		 	$address				= Input::get('address');
		 	$phone 					= Input::get('phone');
		 	$email 					= Input::get('email');

		 	$suplier 				= new person;
		 	$suplier->name 			= $firstName;
		 	$suplier->father_name  	= '';
		 	$suplier->person_type 	= 'suplier';
		 	$suplier->address 		= $address;
		 	$suplier->phone 		= $phone;
		 	$suplier->email 		= $email;

		 	if($suplier->save()) {
		 		return Redirect::route('import-get')
		 						->with('success','Suplier have been registered successfully!');
		 	}else {

		 		return Redirect::route('import-get')
		 						->with('error','suplier is not register Please try agina');
		 	}
		}

		/*
		| LIST SUPLIER 
		*/ 
		public function listSuplier() {
			$suplier = person::all();
			$x = '';
			foreach ($suplier as  $value) {
				$x .= '<tr>
					<td>'.$value->id.'</td>
					<td>'.$value->name.'</td>
					<td>'.$value->phone.'</td>
					<td>'.$value->address.'</td>
					<td><a class="md-trigger import" onclick="setId('."$value->id".')" data-toggle="modal" data-target="#myModal">Import Bill</a></td></tr>';

			}
			return $x; 

		}



		//BILL IMPORT FROM SUPLIER 

		public function importFromSuplier() {

			$material = Input::get('material');
			$loan 	  = Input::get('remain');
			$paid 	  = Input::get('pay');
			$total    = Input::get('all');
			$suplier_id = Input::get('suplier_id');
			$date 	  = date("Y-m-d");
			$bill_type = 'import';

			if(count($material) < 1) {
				return "Please fill the form first please!";
			}else {
			$bill 	  = new bill;
			$bill->date = $date;
			$bill->bill_total = $total;
			$bill->loan 		= $loan;
			$bill->cash 		= $paid;
			$bill->bill_type	= $bill_type;
			$bill->person_id 	= $suplier_id;
			$bill->save();

			$bill_id = Bill::latest('id')->first();
			$bill_id = $bill_id->id;
			
			
			$num_elements = 0;
			while ($num_elements < count($material)) {
				$medicin = new medicin;
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

			return "bill have been imported successfully!";
			
			}
		}


		/*
		| SHOW IMPORT HISTORY MATERIAL CONTENT 
		*/ 
		public function importHistory() {
			$history = DB::table('bill')
						->join('person','person.id','=','bill.person_id')
						->select('bill.id','bill.date','bill.bill_total','bill.loan','bill.cash','person.name')->where('bill.bill_type','import')->get();
						$x = '';
				foreach ($history as $value) {
									$x .='<tr>
                    <td>'.$value->id.'</td>
                    <td><a class="md-trigger import" data-toggle="modal" data-target="#import-material" onclick="seeImportMaterial('.$value->id.');">See Materials</a></td>
                    <td>'.$value->name.'</td>
                    <td>'.$value->date.'</td>
                    <td>'.$value->bill_total.'</td>
                    <td>'.$value->cash.'</td>
                    <td>'.$value->loan.'</td>
                  </tr>';
				
					}
				return $x;

		}

		/*
		| SEE IMPORT MATERILA BASED ON ID 
		*/ 

		public function seeImportMaterial() {
			$id = Input::get('id');
			$medicin = medicin::where('bill_id',$id)->get();
			$x = '';
			foreach ($medicin as $value) {
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
		| SET SUPLIER NAME AJAX 
		*/ 

		public function setSuplierName() {
			$id = Input::get('id');
			$supliernName = person::where('id',$id)->pluck('name');
			return $supliernName;
		}

	}
?>