<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\User;

class UserTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('users')->delete();

		User::create(['name'=>'admin', 'email'=>'admin', 'password'=>bcrypt('admin'), 'type'=>'admin']);
		
	}

}
