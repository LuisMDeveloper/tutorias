<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHabitosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('f2', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('user_id');
			$table->integer('p1')->nullable();
			$table->integer('p2')->nullable();
			$table->integer('p3')->nullable();
			$table->integer('p4')->nullable();
			$table->integer('p5')->nullable();
			$table->integer('p6')->nullable();
			$table->integer('p7')->nullable();
			$table->integer('p8')->nullable();
			$table->integer('p9')->nullable();
			$table->integer('p10')->nullable();
			$table->integer('p11')->nullable();
			$table->integer('p12')->nullable();
			$table->integer('p13')->nullable();
			$table->integer('p14')->nullable();
			$table->integer('p15')->nullable();
			$table->integer('p16')->nullable();
			$table->integer('p17')->nullable();
			$table->integer('p18')->nullable();
			$table->integer('p19')->nullable();
			$table->integer('p20')->nullable();
			$table->integer('p21')->nullable();
			$table->integer('p22')->nullable();
			$table->integer('p23')->nullable();
			$table->integer('p24')->nullable();
			$table->integer('p25')->nullable();
			$table->integer('p26')->nullable();
			$table->integer('p27')->nullable();
			$table->integer('p28')->nullable();
			$table->integer('p29')->nullable();
			$table->integer('p30')->nullable();
			$table->integer('p31')->nullable();
			$table->integer('p32')->nullable();
			$table->integer('p33')->nullable();
			$table->integer('p34')->nullable();
			$table->integer('p35')->nullable();
			$table->integer('p36')->nullable();
			$table->integer('p37')->nullable();
			$table->integer('p38')->nullable();
			$table->integer('p39')->nullable();
			$table->integer('p40')->nullable();
			$table->integer('p41')->nullable();
			$table->integer('p42')->nullable();
			$table->integer('p43')->nullable();
			$table->integer('p44')->nullable();
			$table->integer('p45')->nullable();
			$table->integer('p46')->nullable();
			$table->integer('p47')->nullable();
			$table->integer('p48')->nullable();
			$table->integer('p49')->nullable();
			$table->integer('p50')->nullable();
			$table->integer('p51')->nullable();
			$table->integer('p52')->nullable();
			$table->integer('p53')->nullable();
			$table->integer('p54')->nullable();
			$table->integer('p55')->nullable();
			$table->integer('p56')->nullable();
			$table->integer('p57')->nullable();
			$table->integer('p58')->nullable();
			$table->integer('p59')->nullable();
			$table->integer('p60')->nullable();
			$table->integer('p61')->nullable();
			$table->integer('p62')->nullable();
			$table->integer('p63')->nullable();
			$table->integer('p64')->nullable();
			$table->integer('p65')->nullable();
			$table->integer('p66')->nullable();
			$table->integer('p67')->nullable();
			$table->integer('p68')->nullable();
			$table->integer('p69')->nullable();
			$table->integer('p70')->nullable();
			$table->integer('sumaDT')->nullable();
			$table->integer('sumaME')->nullable();
			$table->integer('sumaDE')->nullable();
			$table->integer('sumaNC')->nullable();
			$table->integer('sumaOL')->nullable();
			$table->integer('sumaPE')->nullable();
			$table->integer('sumaAC')->nullable();
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
		Schema::drop('f2');
	}

}
