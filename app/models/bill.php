<?php 

	/**
	* 
	*/
	class bill extends Eloquent
	{
		
		
		protected $table = 'bill';

		public function person() {
			return $this->belongsTo('person');
		} 

		public function medicin() {
			return $this->hasMany('medicin');
		}

		public function sales() {
			return $this->hasMany('sale');
		}

	}

?>