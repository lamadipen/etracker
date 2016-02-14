<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSupervisorsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('supervisors', function(Blueprint $table)
		{
			$table->increments('sup_id');
            $table->string('sup_fname');
            $table->string('sup_lname');
            $table->string('sup_email');
            $table->string('sup_phone');
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
		Schema::drop('supervisors');
	}

}
