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
		Schema::create('users', function(Blueprint $table) {
			$table->increments('id');
			$table->string('first_name');
			$table->string('middle_initial', 1)->nullable();
			$table->string('last_name');
			$table->string('email');
			$table->string('pass');
			$table->string('phone', 25)->nullable();
			$table->string('title', 100)->nullable();
			$table->int('prefix_id')->nullable();
			$table->int('suffix_id')->nullable();
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
		Schema::drop('users');
	}

}