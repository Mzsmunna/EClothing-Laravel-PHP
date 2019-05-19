<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProductsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('products', function(Blueprint $table)
		{
			$table->integer('pid', true);
			$table->string('pname', 30)->unique('pname');
			$table->string('category', 30);
			$table->string('pfor', 30);
			$table->string('size', 30);
			$table->integer('available');
			$table->integer('xs_available')->nullable();
			$table->integer('s_available')->nullable();
			$table->integer('m_available')->nullable();
			$table->integer('l_available')->nullable();
			$table->integer('xl_available')->nullable();
			$table->integer('xxl_available')->nullable();
			$table->float('rating', 10, 0)->nullable();
			$table->integer('price');
			$table->string('currency', 30);
			$table->integer('cost');
			$table->integer('offer')->nullable();
			$table->string('image')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('products');
	}

}
