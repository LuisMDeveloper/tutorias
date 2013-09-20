<?php

class CarrerasTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('carreras')->delete();

		$carreras = [
			[ 'nombre' => 'Ingeniería en Sistemas Computacionales'],
			[ 'nombre' => 'Licenciatura en Administración'],
			[ 'nombre' => 'Ingeniería Industrial'],
			[ 'nombre' => 'Ingeniería en Industrias Alimentarias'],
			[ 'nombre' => 'Ingeniería Electrónica'],
			[ 'nombre' => 'Ingeniería Mecatronica'],
			[ 'nombre' => 'Ingeniería en Gestión Empresarial'],
			[ 'nombre' => 'Ingeniería Mecánica']
		];

		DB::table('carreras')->insert($carreras);
	}

}