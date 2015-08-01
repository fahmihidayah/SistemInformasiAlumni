<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\User;
use Form;
use Session;

class ApiController extends Controller {

	public function test_api(Request $request){
		$token = Session::getToken();
		return response(["data" => $token], 200);
	}

	public function test_post_api(Request $request){
		return response(["data" => "you got valid token"], 200);
	}

}
