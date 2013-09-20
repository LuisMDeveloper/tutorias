<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDocentesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('docentes', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('nombre', 45);
			$table->string('aPaterno', 45);
			$table->string('aMaterno', 45);
			$table->string('escolaridad', 45)->nullable();
			$table->string('grado', 45);
			$table->string('nomina', 45);
			$table->string('clave');
			$table->integer('carrera_id')->nullable();
			$table->integer('role_id')->nullable();
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
		Schema::drop('docentes');
	}

}
