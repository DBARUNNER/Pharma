<?php

	/**
	* 
	*/
	class stockController extends BaseController
	{
		
		public function stockGet(){
			$stocks			= DB::table('medicin')
							->groupBy('generic_name')
							->distinct('generic_name')->get();

			// stock notification which is less than 5 
			$expire 	= medicin::where('quantity','<=', 5)->get();
			$msgNumber  = count($expire);
			$type = 'quantity';
			return View::make('stock',array(
				'stocks'	=> $stocks,
				'expire'	=> $expire,
				'msgNumber'	=> $msgNumber,
				'msg'		=> 'Less then five is remain in stock'
				'type'		=> $type
				));
		}

		/*
		| STOCK STATUS 
		*/ 

		public function stockStatus() {
			$stock 		= medicin::all();
			$x = '';
			foreach ($stock  as $value) {
				$x .= '<tr>
							<td>'.$value->barcode.'</td>
							<td>'.$value->generic_name.'</td>
							<td>'.$value->quantity.'</td>
							<td>'.$value->price.'</td>
							<td>'.$value->total_price.'</td>
					  </tr>';
			}
			return $x; 
		}


		/*
		| MEDICINE STATUSE LOGIC CODE
		*/ 

		public function medicineStatus() {
			$stocks		= DB::table('medicin')
							->groupBy('generic_name')
							->distinct('generic_name')->get();
			$x = '';
			foreach ($stocks as $value) {
				$x .= '<tr>
							<td>'.$value->barcode.'</td>
							<td>'.$value->generic_name.'</td>
							<td>'.$value->quantity.'</td>
							<td>'.$value->product_date.'</td>
							<td>'.$value->expire_date.'</td>
							<td>'.$value->madein.'</td>
							<td>'.$value->weight.'</td>
					   </tr>';
			}
			return $x;
		}
	}

?>