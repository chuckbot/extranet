<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAseguradorasTable extends Migration
{

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('aseguradoras', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('codigo_aseguradora');
			$table->string('nombre');
			$table->string('rif');
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
		Schema::drop('aseguradoras');
	}

}
