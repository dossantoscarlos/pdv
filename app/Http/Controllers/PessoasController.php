<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\UsuarioForm;


class PessoasController extends Controller
{
   public function __construct()
   {
   		$users = DB::table('users')->where('level','root')->first();
   		if(isset($users)){ 
   			$this->middleware('auth');
   		}
   }

   public function configPessoaOne(Request $request)
   {
   		return view('pessoa.createonepessoa');
   }

   public function createPessoaOne(UsuarioForm $request)
   {
   	// config/funcionario/id
   		$cep = DB::table('ceps')->insertGetId([
   			'cep'=> $request->input('cep'),
   			'rua' => $request->input('rua'),
   			 
   		]);

   		$dbPessoa = DB::table('Pessoa')->insertGetId([
            'nome_completo' => $request->input('nome_completo'),
            'cpf' =>$request->input('nome_completo'),
            'cep_id' => $request->input('nome_completo'),
            'residencia_numero' => $request->input('nome_completo'),
            'complemento' => $request->input('nome_completo'),
            'sexo' => $request->input('nome_completo'),
            'status_civil' => $request->input('nome_completo'),
            'fixo' => $request->input('nome_completo'),
            'celular' => $request->input('nome_completo'),
            'email' => $request->input('nome_completo'),
        ]);
   }

}
