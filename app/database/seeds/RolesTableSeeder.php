<?php

class RolesTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('roles')->delete();

		$roles = [
			[ 'nombre' => 'Administrador'],
			[ 'nombre' => 'Jefe de Carrera'],
			[ 'nombre' => 'Coordinador'],
			[ 'nombre' => 'Tutor'],
			[ 'nombre' => 'Tutorado']
		];

		DB::table('roles')->insert($roles);
	}

}