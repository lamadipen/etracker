<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdvisorsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('advisors', function(Blueprint $table)
		{
			$table->increments('adv_id');
            $table->string('adv_fname');
            $table->string('adv_lname');
            $table->string('adv_email');
            $table->string('adv_password');
            $table->boolean('is_admin');
            $table->boolean('is_active');
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
		Schema::drop('advisors');
	}

}
