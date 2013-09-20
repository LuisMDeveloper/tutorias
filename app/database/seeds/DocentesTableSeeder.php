<?php 

class DocentesTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('docentes')->delete();

		$docentes = [
			[	
				'nombre'		=> 'FRANCISCO PACO', 
			 	'aPaterno'		=> 'ALCARAZ',
			 	'aMaterno'		=> 'CONTRERAS',
			 	'escolaridad'	=> 'INGENIERO INDUSTRIAL',
			 	'grado'			=> 'ING.',
			 	'nomina'		=> '1',
			 	'clave'			=> 'clave',
			 	'carrera_id'	=> 3,
			 	'role_id'		=> 4
			],
			[
				'nombre'		=> 'GUILLERMO',
				'aPaterno'		=> 'BALTAZAR',
				'aMaterno'		=> 'CORTES',
				'escolaridad'	=> 'INGENIERO EN SISTEMA',
				'grado'			=> 'ISC',
				'nomina'		=> '2',
				'clave'			=> 'clave',
				'carrera_id'	=> 1,
				'role_id'		=> 2
			],
			[
				'nombre'		=> 'MARCO',
				'aPaterno'		=> 'MORENO',
				'aMaterno'		=> 'MARES',
				'escolaridad'	=> 'INGENIERO EN ELECTRO',
				'grado'			=> 'ING.',
				'nomina'		=> '3',
				'clave'			=> 'clave',
				'carrera_id'	=> 5,
				'role_id'		=> 3
			],
			[
				'nombre'		=> 'ALEJANDRA',
				'aPaterno'		=> 'AVALOS',
				'aMaterno'		=> 'LEMUS',
				'escolaridad'	=> null,
				'grado'			=> 'L.A.E.',
				'nomina'		=> '4',
				'clave'			=> 'clave',
				'carrera_id'	=> null,
				'role_id'		=> null
			]
		];



		DB::table('docentes')->insert($docentes);
	}

}