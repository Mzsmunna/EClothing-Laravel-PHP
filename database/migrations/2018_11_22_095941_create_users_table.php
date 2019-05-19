<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('username', 30)->unique('username');
			$table->string('firstname', 30);
			$table->string('lastname', 30);
			$table->string('email', 30)->unique('email');
			$table->string('password', 30);
			$table->string('gender', 30);
			$table->string('dob', 30)->nullable();
			$table->string('phonenumber', 30)->nullable();
			$table->string('country', 30)->nullable();
			$table->string('city', 30)->nullable();
			$table->string('area', 30)->nullable();
			$table->string('address', 30)->nullable();
			$table->string('profilepic')->nullable();
			$table->string('accounttype', 30);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('users');
	}

}
