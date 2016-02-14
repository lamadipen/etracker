<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServicesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('services', function(Blueprint $table)
		{
			$table->increments('ser_id');
            $table->string('ser_name');
            $table->string('ser_desc');
            $table->dateTime('ser_date');
            $table->integer('std_id');
            $table->integer('sup_id');
            $table->integer('org_id');
            $table->integer('sers_id');
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
		Schema::drop('services');
	}

}
