<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\FuncionarioForm;

class FuncionariosController extends Controller
{
    public function __construct(){
    	$find = DB::table('users')->where('level','root')->doesntExist();
    	if ($find){
    		$this->middleware('guest');
    	}else{
    		$this->middleware('auth');
    	}
    }

    public function index(Request $request){
   		return view('funcionario.index');
    }

    public function configFuncionarioOne(Request $request){
    	$find = DB::table('users')->where('level','root')->doesntExist();
    	if ($find){
   		  	return view('funcionario.createonefuncionario');
    	}else{
    		return redirect()->route('login');
    	}
    }

    public function createOneFuncionario(FuncionarioForm $requestFuncionarioForm) 
    {

    }
}
