<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \Illuminate\Http\Response;

class PdvController extends Controller
{
    
    /**
     * Create a new controller instance.
     *
     * @return void
     */
	public function __construct () {
		//code
	}


    /**
     * Show the application pdvcontroller.
     *
     * @return \Illuminate\Http\Response
     */
    public function index () {
    	return view('pdv');
    }
}
