<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeysToNotasFiscaisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('notasfiscais', function (Blueprint $table) {
            $table->foreign('id_cliente')->references('id')->on('clientes');
            $table->foreign('id_venda')->references('id')->on('vendas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('notasfiscais', function (Blueprint $table) {
            $table->dropForeign('notasfiscais_id_cliente_foreign');

            $table->dropForeign('notasfiscais_id_venda_foreign');
        });
    }
}
