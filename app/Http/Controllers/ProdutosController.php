<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produto;
use Illuminate\Support\Facades\Log;

class ProdutosController extends Controller
{
    //
    public function __construct()
    {
        //$this->middleware('auth');
    }
    public function index()
    {
      return view('produto.index');
    }

    public function show(Request $request) 
    {
        return view('produto.select');
    }

    public function idModal(Request $request){
        if ($request->has('id')){
            if(is_numeric($request->input('id'))){
                $produto = Produto::buscaDescricao($request->input('id'));
                return response()->json($produto);
            }
        }
    }

    public function jsonApp(Request $request)
    {

        if ($request->has('consultar') || $request->has('code')){
            if(is_numeric($request->input('code')))
            {
                $resposta = Produto::buscaSerial($request->input('code')); 
            }
            elseif(!is_numeric($request->input('consultar')))
            { 
                $resposta = Produto::buscaNome($request->input('consultar')); 
            }
            return response()->json($resposta);
        }
    }
}
