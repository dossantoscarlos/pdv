<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AutenticationController extends Controller
{
    public function __construct(){

    }

    public function index(){
    	return view('dashboard');
    }

    public function select(Request $request){
    	if ($request->isMethod('post')){
    		return view('home');
    	}
    	//return view('dashboard');
    }


}
