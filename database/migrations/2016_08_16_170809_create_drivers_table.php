<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDriversTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('drivers', function(Blueprint $table)
		{
            $table->engine = 'InnoDB';
			$table->increments('id');
			$table->string('picture');
			$table->string('address1');
			$table->string('address2')->nullable();
			$table->string('city');
			$table->string('licence_no');
			$table->string('plate_no');
			$table->string('vehicle_type');
			$table->string('vehicle_colour');
			$table->string('vehicle_model');
			$table->string('model_no');
			$table->string('driving_licence');
			$table->string('tourist_travel_approval');
			$table->string('driver_card_pro');
			$table->integer('user_id')->unsigned();
			$table->foreign('user_id')->references('id')->on('users');
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
		Schema::drop('drivers');
	}

}
