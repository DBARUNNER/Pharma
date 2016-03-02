<?php

	/**
	* 
	*/
	class medicin extends Eloquent
	{
		
	 	protected $table 		= 'medicin';
	 	protected $primarykey 	= 'barcode';
		
		public function bill() {
			return $this->belongsT0('Bill');
		}
	}

?>