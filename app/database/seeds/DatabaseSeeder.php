<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		$this->call('CarrerasTableSeeder');
		$this->call('DocentesTableSeeder');
		$this->call('RolesTableSeeder');
	}

}