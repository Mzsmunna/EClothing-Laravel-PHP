<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSoldoutsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('soldouts', function(Blueprint $table)
		{
			$table->integer('soid', true);
			$table->integer('pid');
			$table->string('pname', 30)->unique('pname');
			$table->string('category', 30);
			$table->string('pfor', 30);
			$table->string('size', 30);
			$table->integer('sold');
			$table->integer('xs_sold')->nullable();
			$table->integer('s_sold')->nullable();
			$table->integer('m_sold')->nullable();
			$table->integer('l_sold')->nullable();
			$table->integer('xl_sold')->nullable();
			$table->integer('xxl_sold')->nullable();
			$table->integer('rating')->nullable();
			$table->integer('price');
			$table->string('currency', 30);
			$table->integer('cost');
			$table->integer('offer')->nullable();
			$table->integer('profit');
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
		Schema::drop('soldouts');
	}

}
