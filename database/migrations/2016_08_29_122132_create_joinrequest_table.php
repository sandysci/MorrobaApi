<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJoinrequestTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('joinrequests', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('request_id')->unsigned();
			$table->foreign('request_id')->references('id')->on('requests');
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
		Schema::drop('joinrequests');
	}

}
