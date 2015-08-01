<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Mahasiswa extends Model {

	protected $table = 'mahasiswas';

	public function user(){
		return $this->hasOne('App\User');
	}

	public function image(){
		return $this->hasOne('App\Image');
	}

	public static function create_mahasiswa(Request $request){
		$mahasiswa = new Mahasiswa();
		$mahasiswa->first_name = $request->get('first_name');
		$mahasiswa->last_name = $request->get('last_name');
		$mahasiswa->batch = $request->get('batch');
		return $mahasiswa;
	}
}
