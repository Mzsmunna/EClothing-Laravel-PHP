<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePurchasesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('purchases', function(Blueprint $table)
		{
			$table->integer('prid', true);
			$table->integer('pid');
			$table->string('pname', 30);
			$table->string('category', 30);
			$table->string('pfor', 30);
			$table->string('size', 30);
			$table->integer('quantity');
			$table->integer('price');
			$table->integer('cost')->nullable();
			$table->integer('offer')->nullable();
			$table->string('currency', 30);
			$table->string('purchasedby', 30);
			$table->string('date', 30);
			$table->string('purchasedmethod', 30);
			$table->string('phonenumber', 30);
			$table->string('address', 100);
			$table->integer('totalprice');
			$table->string('image', 30)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('purchases');
	}

}
