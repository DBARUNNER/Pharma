<?php

	/**
	* 
	*/
	class stockController extends BaseController
	{
		
		public function stockGet(){
			$stocks		= DB::table('medicin')
							->distinct('generic_name')->get();
			return View::make('stock',array(
				'stocks'	=> $stocks
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
			$stocks = medicin::all();
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