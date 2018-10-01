<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cep;

class CepsController extends Controller
{
   public function  __construct(){
      $users = DB::table('users')->where('level','root')->first();
      if(isset($users)){ 
         $this->middleware('auth');
      }  		
   }

   public function selectCep(Request $request)
   {
   		$cep = Cep::findOne($request->input('cep'));
   }
}
