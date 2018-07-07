<?php

namespace App;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{ 
	/**
	 * @var string
	 **/
	protected $table  = 'produtos';   

	public static function buscaSerial($param){
		return DB::select('select produtos.id, produtos.nome_produto, produtos.marca_produto, produtos.descricao_produto, produtos.preco_produto, codigobarra.serial,estoques.quantidade_atual from produtos inner join codigobarra on codigobarra.id_produto=produtos.id inner join estoques on produtos.id_estoque= estoques.id where codigobarra.serial= :serial', ['serial' => $param]);
	}

	public static function buscaNome($param){
		return DB::select("select produtos.id, produtos.nome_produto, produtos.marca_produto, produtos.descricao_produto, produtos.preco_produto, codigobarra.serial,estoques.quantidade_atual from produtos inner join codigobarra on codigobarra.id_produto=produtos.id inner join estoques on produtos.id_estoque= estoques.id where  produtos.nome_produto like '%:nome%'", ['nome' => $param]);
	}
	public static function buscaDescricao($param){
		return DB::select('select descricao_produto from produtos where id = :id', ['id' => $param]);
	}
	
	public static function todos(){
		$objeto  = Produto::all();
        return $objeto;
	}
}
