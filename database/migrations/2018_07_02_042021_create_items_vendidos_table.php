<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemsVendidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('itemsvendidos', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('id_venda')->index('itemsvendidos_id_venda_foreign');
            $table->unsignedInteger('codigo_barra')->index('itemsvendidos_codigo_barra_foreign');
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
        Schema::dropIfExists('itemsvendidos');
    }
}
