<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CnpjLoginForm;
use Illuminate\Support\Facades\Log;

class AutenticationController extends Controller
{
    public function __construct(){

    }

    public function index(){
    	return view('dashboard');
    }

    public function select(CnpjLoginForm $request){
    	if ($request->isMethod('post')){
        if ($request->validated()){
          Log::debug($request);
          return view('home');
        }else{
          return view('dashboard');
        }
      }
    }
}
