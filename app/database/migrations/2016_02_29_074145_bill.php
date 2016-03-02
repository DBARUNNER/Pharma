<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Bill extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('bill', function(Blueprint $table)
		{
			$table->increments('id');
			$table->date('date');
			$table->integer('bill_total');
			$table->integer('loan');
			$table->integer('cash');
			$table->string('bill_type');
			$table->integer('person_id')->unsigned();
			$table->foreign('person_id')->references('id')->on('person');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('bill');
	}

}
