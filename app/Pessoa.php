<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Cep;
class Pessoa extends Model
{

	public function ceps()
    {
        return $this->hasMany('App\Cep','cep', 'id_cep');
    }

   	public function funcionario()
   	{
   		return $this->belongsTo('App\Pessoa','id');
   	}

    public function create ($request){

    	$consulta = DB::table('pessoas')->where('cpf',$request->cpf)->doesntexist();

    	$cepId = Cep::create($request);
    	
    	if($consulta){
    		$union = $request->input('nome') .' '. $request->input('sobrenome');

	    	$dbPessoa = DB::table('pessoas')->insertGetId([
	            'nome_completo' => $union ,
	            'cpf' =>$request->input('cpf'),
	            'id_cep' => $cepId->cep,
	            'residencia_numero' => $request->input('numero'),
	            'complemento' => $request->input('complemento'),
	            'sexo' => $request->input('sexo'),
	            'status_civil' => $request->input('status_civil'),
	            'fixo' => $request->input('fixo'),
	            'celular' => $request->input('celular'),
	            'email' => $request->input('email')
	        ]);
	        $consulta = DB::table('pessoas')->select('*')->where('cpf',$request->cpf)->value('id');
    	}else{
    		$consulta = DB::table('pessoas')->select('*')->where('cpf',$request->cpf)->value('id');
    	}
   
        return $consulta;
    }

}
