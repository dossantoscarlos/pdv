<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CoverController extends Controller
{
	private $resul;

	public function __construct (){
		//validaConfig( , );
		$users = DB::table('users')->where('level', 'root')->exists();
		if($users){
			return $this->middleware('Auth');
		}else {
			return $this->middleware('guest');
		}
	}

	private function validaConfig( $paramOne, $paramTwo)
	{
		
	}

    public function index()
    {
    	$users = DB::table('users')->where('level', 'root')->exists();
		if($users){
			return view('cover.index');
		}else {
			return redirect()->route('pessoa.createOne');
		}
      	
    }
}
