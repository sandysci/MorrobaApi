<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRequestTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('requests', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('location');
			$table->timestamp('time');
			$table->enum('accepted', array('Created', 'Accept'))->default('Accept');
			$table->string('pickuplocation');
			$table->integer('driver_id')->unsigned();
			$table->foreign('driver_id')->references('id')->on('drivers');
			$table->integer('passenger_id')->unsigned();
			$table->foreign('passenger_id')->references('id')->on('passengers');
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
		Schema::drop('requests');
	}

}
