<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class TestController extends Controller {

	public function test_login(Request $request){
		return view('login');
	}

	public function test_register(Request $request){
		return view('register');
	}
}
