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
			$table->string('last_name');
			$table->string('short_profile');
			$table->string('address');
			$table->string('job');
			$table->string('batch');
			$table->string('facebook_account');
			$table->string('twitter_account');
			$table->string('behance_account');
			$table->string('dribble_account');
			$table->string('linkedin_account');
			$table->integer('users_id');
			$table->integer('images_id');
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
