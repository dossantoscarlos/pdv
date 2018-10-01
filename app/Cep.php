<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Cep extends Model
{
	public function pessoa()
    {
        return $this->belongsTo('App\Pessoa','cep');
    }

	public static function create($request)
	{
		$cepid = DB::table('ceps')->where('cep',$request->input('cep'))->doesntExist();
      	if ($cepid){
			DB::table('ceps')->insert([
		   		'cep'=> $request->input('cep'),
		   		'rua' => $request->input('rua'),
		   		'estado' => $request->input('estado'),
		        'cidade' => $request->input('cidade'),
		        'bairro' => $request->input('bairro')
	    	]);
		}
		$cep = DB::table('ceps')->where('cep', $request->input('cep'))->first();	
		return $cep;
	}
}