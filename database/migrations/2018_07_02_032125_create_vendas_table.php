<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVendasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vendas', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('id_users')->index('vendas_id_users_foreign');
            $table->enum('forma_pagamento',['CREDITO','DEBITO','DINHEIRO']);
            $table->float('valor_cobrado',10,2);
            $table->float('valor_pago',10,2);
            $table->float('troco_fornecido',10,2)->nullable();
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
        Schema::dropIfExists('vendas');
    }
}
