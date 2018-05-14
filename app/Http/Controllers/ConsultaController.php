<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ConsultaController extends Controller
{

	/**
	 * ConsultaController
	 * @return void
	 */
    public function __construct(){
    	#code
    }

	/**
	 *
	 * @return Illuminate\Http\Response
	 */
    public function index(){
    	return view('consulta.index');
    }
}
