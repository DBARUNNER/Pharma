<?php

	/**
	* 
	*/
	class person extends Eloquent
	{
		
	 	protected $table = 'person';
		
		public function bill() {
			return $this->hasMany('Bill','person_id','id');
		}
	}

?>