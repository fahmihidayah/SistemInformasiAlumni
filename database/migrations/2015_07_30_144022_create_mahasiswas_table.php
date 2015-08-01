<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMahasiswasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('mahasiswas', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('first_name');
			$table->string('last_name')->default("");
			$table->string('short_profile')->default("Hello world");
			$table->string('address')->nullable();
			$table->string('job')->nullable();
			$table->string('batch');
			$table->string('facebook_account')->nullable();
			$table->string('twitter_account')->nullable();
			$table->string('behance_account')->nullable();
			$table->string('dribble_account')->nullable();
			$table->string('linkedin_account')->nullable();
			$table->integer('users_id');
			$table->integer('images_id')->nullable();
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
		Schema::drop('mahasiswas');
	}

}
