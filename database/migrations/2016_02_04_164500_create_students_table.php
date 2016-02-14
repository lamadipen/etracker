<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('students', function(Blueprint $table)
		{
			$table->increments('std_id');
            $table->string('std_fname');
            $table->string('std_lname');
            $table->string('std_email');
            $table->string('std_password');
            $table->string('std_gradYear');
            $table->boolean('std_isActive');
            $table->boolean('std_isPassedOut');
            
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
		Schema::drop('students');
	}

}
