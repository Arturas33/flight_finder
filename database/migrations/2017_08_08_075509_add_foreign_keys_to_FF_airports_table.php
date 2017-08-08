<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToFFAirportsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('FF_airports', function(Blueprint $table)
		{
			$table->foreign('contry_id', 'fk_FF_airports_FF_ country')->references('id')->on('FF_ country')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('FF_airports', function(Blueprint $table)
		{
			$table->dropForeign('fk_FF_airports_FF_ country');
		});
	}

}
