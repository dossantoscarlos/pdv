<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeysToItemsVendidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('itemsvendidos', function (Blueprint $table) {
            $table->foreign('id_venda')->references('id')->on('vendas');
            $table->foreign('codigo_barra')->references('id')->on('codigobarra');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('itemsvendidos', function (Blueprint $table) {
            $table->dropForeign('itemsvendidos_id_venda_foreign');
            $table->dropForeign('itemsvendidos_codigo_barra_foreign');
        });
    }
}
