<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\UsuarioForm;
use App\Pessoa;
use App\Cep;

class PessoasController extends Controller
{
   public function __construct()
   {
      $users = DB::table('users')->where('level','root')->first();
      if(isset($users)){ 
         $this->middleware('auth');
      }
   }

   public function createPessoaOne(Request $request)
   {
      $pessoa = new Pessoa;
      $resultado = $pessoa->create($request);
      return redirect()->json($resultado);
   }

}
?>