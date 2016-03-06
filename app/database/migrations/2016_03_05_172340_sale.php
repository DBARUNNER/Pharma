<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Sale extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('sales', function(Blueprint $table)
		{
			$table->string('barcode');
			$table->string('generic_name');
			$table->integer('price');
			$table->integer('total_price');
			$table->string('madein');
			$table->string('weight');
			$table->string('quantity');
			$table->date('product_date');
			$table->date('expire_date');
			$table->string('status');
			$table->integer('bill_id')->unsigned();
			$table->primary(['barcode','bill_id']);
			$table->foreign('bill_id')
					->references('id')
					->on('bill');
			$table->foreign('barcode')
					->references('barcode')
					->on('medicin');
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
		Schema::drop('sales');
	}

}
