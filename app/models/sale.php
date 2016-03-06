<?php

	/**
	* 
	*/
	class sale extends Eloquent
	{
		
	 	protected $table 		= 'sales';
	 	protected $primarykey 	= 'barcode';
		
		public function bill() {
			return $this->belongsT0('bill');
		}
	}

?>