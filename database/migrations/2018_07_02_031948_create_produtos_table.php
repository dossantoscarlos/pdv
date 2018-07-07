<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProdutosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produtos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome_produto',90);
            $table->string('marca_produto',50);
            $table->string('descricao_produto',100);
            $table->float('preco_produto',10,2);
            $table->string('icon',100);
            $table->integer('unidade');
            $table->float('peso_produto',10,2);
            $table->string('id_fornecedor', 25)->index('produtos_id_fornecedor_foreign');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produtos');
    }
}
