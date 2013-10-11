<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateF1aTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('f1a', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('user_id');
			$table->string('escuela_procedencia')->nullable();
			$table->string('tipo_bachillerato')->nullable();
			$table->string('promedio_admision')->nullable();
			$table->string('promedio_bachillerato')->nullable();
			$table->string('vive_con')->nullable();
			$table->string('ingles');
			$table->string('nivel')->nullable();
			$table->string('deportivo');
			$table->string('actividad_dep')->nullable();
			$table->string('cultural');
			$table->string('actividad_cult')->nullable();
			$table->string('dificultad_ext_esc')->nullable();
			$table->string('dificultad_ext_esc_texto')->nullable();
			$table->string('trabaja')->nullable();
			$table->string('trabajo_horas')->nullable();
			$table->string('problemas')->nullable();
			$table->string('academicos')->nullable();
			$table->string('emocionales')->nullable();
			$table->string('familiares')->nullable();
			$table->string('de_salud')->nullable();
			$table->string('politicos')->nullable();
			$table->string('religiosos')->nullable();
			$table->string('economicos')->nullable();
			$table->string('otro')->nullable();
			$table->string('otro_problema')->nullable();
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
		Schema::drop('f1a');
	}

}
