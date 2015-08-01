<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Mahasiswa;
use App\User;

class GuestController extends Controller {

	public function get_login(Request $request){
		return view('login');
	}

	public function post_login(Request $request){

	}

	public function get_register(Request $request){
		return view('register');
	}
	// kurang validator
	public function post_register(Request $request){
		// $mahasiswa = Mahasiswa::create_mahasiswa($request);
		// $user = User::create_user($request);
		return $request->all();
	}	

}
