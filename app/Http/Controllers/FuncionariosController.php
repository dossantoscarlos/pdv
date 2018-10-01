<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Validator as V;
use Illuminate\Support\Facades\Log;

class FuncionariosController extends Controller
{
    public function __construct(){
    	$find = DB::table('users') 
                ->join('funcionarios', 'funcionarios.id', '=','users.id_funcionario')
                ->where('level','root')
                ->doesntExist();

    	if ($find){
    		if(DB::table("funcionarios")->doesntExist())
            {
                $this->middleware('guest');
            }else {
                $this->middleware('guest');
                return redirect()->route('registre');
    	    }
        }else{
    		$this->middleware('auth');
    	}
    }

    public function index(Request $request){
   		return view('funcionario.index');
    }

    public function configFuncionarioOne($id){
    	$find = DB::table('users')->where('level','root')->doesntExist();
    	if ($find){
            date_default_timezone_set('UTC');
            $resp = ($id==1) ? $id : 1;
            $finds = \App\Pessoa::find($resp)->first();
            $hour = date('Y-m-d');
   		  	return view('funcionario.createonefuncionario',['finds' => $finds, 'hora'=>$hour]);
    	}else{
    		return redirect()->route('login');
    	}
    }

    public function createOneFuncionario(Request $request) 
    {
        $messages = [
            'nome.required' => 'O :attribute é necessario.',
            'pis.required' => 'O :attribute é necessario.',
            'rg.required' => 'O :attribute é necessario.',
            'required'=> 'A :attribute é necessaria.',
            'min' => 'A quantidade esta abaixo do especificado.',
            'carteiraTrabalho.required'=> 'A Carteira de Trabalho é necessaria.',
            'alpha' => 'Não é permitido numeros apenas letras.',
            'digits' => 'Quantidade de numeros não é compativel com :attribute.',
        ];
      
        $v = V::make($request->all(),[
            'nome' => 'required|string|max:255',
            'matricula' =>'required|alpha_num|max:100',
            'data' => 'required|date',
            'pis' => 'required|digits:10',
            'carteiraTrabalho' => 'required|digits:10',
            'rg' => 'required|alpha_num|digits:9',
            'funcao' => 'required|string|min:5',
            'experiencia' =>'required|string|max:3|min:3',
             
        ],$messages);

        $exp = $v->sometimes(['nome_empresa_one','comprovante_one'], 'required|string|max:255',function($input){
            return $input->experiencia=='sim';
        })->validate();

        $v->sometimes(['inicio_one', 'final_one'], 'required', function ($input){
            return $input->nome_empresa_one != '';
        })->validate();
       
        if(!$v->fails()):
            return redirect()->route('login');
        endif;
    }  
}
