<?php 

	/**
	* 
	*/
	class employee extends Eloquent
	{
		use SoftDeletingTrait;
		
		protected $table 		= 'employees';
		protected $primarykey 	= 'id';
		protected $dates 		= ['deleted_at'];

	}

?>