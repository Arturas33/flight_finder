<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFFFlightsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('FF_flights', function(Blueprint $table)
		{
			$table->integer('count', true);
			$table->string('id', 36)->unique('id_UNIQUE');
			$table->timestamps();
			$table->softDeletes();
			$table->string('arrivel');
			$table->string('departure');
			$table->string('airLine_id', 36)->index('fk_FF_flights_FF_airLine1_idx');
			$table->string('origin_id', 36)->index('fk_FF_flights_FF_airports1_idx');
			$table->string('destination_id', 36)->index('fk_FF_flights_FF_airports2_idx');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('FF_flights');
	}

}
