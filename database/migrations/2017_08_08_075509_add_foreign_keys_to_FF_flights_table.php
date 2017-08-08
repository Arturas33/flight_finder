<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToFFFlightsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('FF_flights', function(Blueprint $table)
		{
			$table->foreign('airLine_id', 'fk_FF_flights_FF_airLine1')->references('id')->on('FF_airline')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('origin_id', 'fk_FF_flights_FF_airports1')->references('id')->on('FF_airports')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('destination_id', 'fk_FF_flights_FF_airports2')->references('id')->on('FF_airports')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('FF_flights', function(Blueprint $table)
		{
			$table->dropForeign('fk_FF_flights_FF_airLine1');
			$table->dropForeign('fk_FF_flights_FF_airports1');
			$table->dropForeign('fk_FF_flights_FF_airports2');
		});
	}

}
