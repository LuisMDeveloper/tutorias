<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserProfilesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('user_profiles', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('user_id');
			$table->string('nombre', 45);
			$table->string('aPaterno', 45);
			$table->string('aMaterno', 45);
			$table->string('num_control', 45)->nullable();
			$table->string('email', 45)->nullable();
			
			$table->string('calle', 45)->nullable();
			$table->string('numExt', 45)->nullable();
			$table->string('numInt', 45)->nullable();
			$table->string('entidad', 45)->nullable();
			$table->string('municipio', 45)->nullable();
			$table->string('colonia', 45)->nullable();
			$table->string('cp', 45)->nullable();
			$table->string('lugar_nacimiento', 45)->nullable();
			$table->string('estado_civil', 45)->nullable();
			$table->string('telCasa', 45)->nullable();
			$table->string('telCel', 45)->nullable();
			$table->integer('grupo_id')->nullable();
			$table->string('escolaridad', 45)->nullable();
			$table->string('grado', 45)->nullable();
			$table->string('nomina', 45)->nullable();
			$table->integer('carrera_id')->nullable();
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
		Schema::drop('user_profiles');
	}

}
