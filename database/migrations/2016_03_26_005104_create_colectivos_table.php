<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateColectivosTable extends Migration
{

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('colectivos', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('codigo_colectivo');
			$table->string('nombre');
			$table->integer('codigo_aseguradora');
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
		Schema::drop('colectivos');
	}

}
