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
		$mahasiswa = Mahasiswa::create_mahasiswa($request);
		$mahasiswa->save();
		$user = User::create_user($request);
		$user->save();
		return $request->all();
	}	

	public function get_home(Request $request){
		return view('home_main');
	}

	public function get_about(Request $request){
		return view('about');
	}

	public function get_detail_profile(Request $request){
		return view('detail_profile');
	}

	public function get_events(Request $request){
		return view('events');
	}

	public function get_detail_event(Request $request){
		return view('detail_events');
	}

	public function get_detail_project(Request $request){
		return view('detail_project');
	}

	public function get_projects(Request $request){
		return view('projects');
	}

	public function get_projects_depan(Request $request){
		return view('projects_depan');
	}

	public function get_profile(Request $request){
		return view('profile');
	}
	
}
