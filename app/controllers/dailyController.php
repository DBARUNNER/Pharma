<?php
	
	/**
	* 
	*/
	class dailyController extends BaseController
	{
		
		public function dailyGet(){
			return View::make('dailyPayment',array(
				'expire'	=> '',
				'msgNumber'	=> 0
				));
		}

		// Daily payments logic code 

		public function dailyPayments() {
			$desc 		= Input::get('desc');
			$price 		= Input::get('price');
			$date 		= Input::get('date');

			$payments 			= new dailyPayment;
			$payments->desc 	= $desc;
			$payments->date 	= $date;
			$payments->price 	= $price;
			if($payments->save()) {
				return Redirect::route('daily-get')	
						->with('success','Daily payments have been saved!');
			}else {


				return Redirect::route('daily-get')	
						->with('error','something is wrong please try again');

			}
		} 

		/*
		| Daily paymnet history 
		*/ 

		public function dailyHistory() {
			$dialyPayments 		= DB::table('dailyPayments')
										->orderBy('id','desc')
										->get();
			
			$x = '';
			foreach ($dialyPayments as $value) {
				$x .= '<tr>
							<td>'.$value->id.'</td>
							<td>'.$value->desc.'</td>
							<td>'.$value->price.'</td>
							<td>'.$value->date.'</td>
							<td><a>Edite</a></td>
							<td><a>Delete</a></td>
					   </tr>';
			}

			return $x;
		}
	}
?>