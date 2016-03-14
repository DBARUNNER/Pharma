<?php

	/**
	* 
	*/
	class homeController extends BaseController
	{
		
		public function homeGet(){
			$months 		= strtotime("+3 Months");
			$date 			= date('Y-m-d', $months);
			$expire			= medicin::where('expire_date','<=',$date)->get();
			$msgNumber 		= count($expire);
			$type 			= 'expire';
			return View::make('home',array(
				'expire'	=> $expire,
				'msgNumber'	=> $msgNumber,
				'msg'		=> 'Just 3 moths in Expiration',
				'type'		=> $type
				));	
		}


		/*
		| EXPIRE INFORMATION IN MODEL LOGC CODE
		*/ 

		public function expireInfo() {
			$id 		= Input::get('id');
			$expire 	= medicin::where('barcode',$id)->get();

			$x = '';
			foreach ($expire as $expire) {
				$x .='<tr>
						<td>'.$expire->barcode.'</td>
						<td>'.$expire->generic_name.'</td>
						<td>'.$expire->price.'</td>
						<td>'.$expire->madein.'</td>
						<td>'.$expire->weight.'</td>
						<td>'.$expire->quantity.'</td>
						<td>'.$expire->product_date.'</td>
						<td>'.$expire->expire_date.'</td>
				  </tr>';
			}
			
			return $x; 
		}


		// Expire Info all 
		public function expireInfoAll() {

			$months 		= strtotime("+3 Months");
			$date 			= date('Y-m-d', $months);
			$expire			= medicin::where('expire_date','<=',$date)->get();

			$x = '';
			foreach ($expire as $expire) {
				$x .='<tr>
						<td>'.$expire->barcode.'</td>
						<td>'.$expire->generic_name.'</td>
						<td>'.$expire->price.'</td>
						<td>'.$expire->madein.'</td>
						<td>'.$expire->weight.'</td>
						<td>'.$expire->quantity.'</td>
						<td>'.$expire->product_date.'</td>
						<td>'.$expire->expire_date.'</td>
				  </tr>';
			}
			
			return $x; 
		}

	}
?>