<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubsidiariesTable extends Migration
{

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('subsidiaries', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name')->nullable();
			$table->string('lastname')->nullable();
			$table->string('cedula')->nullable();
			$table->date('birthday');
			$table->string('email')->unique()->required();
			$table->string('sex');
			$table->string('val_user');
			$table->string('subsidiary_type');
			$table->string('telephone');
			$table->string('cedula_titular');
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
		Schema::drop('subsidiaries');
	}

}
