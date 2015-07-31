<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePortofoliosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('portofolios', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('judul_portofolio');
			$table->string('keterangan_portofolio');
			$table->date('waktu_portofolio');
			$table->integer('images_id');
			$table->integer('mahasiswas_id');
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
		Schema::drop('portofolios');
	}

}
