<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNotasFiscaisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notasfiscais', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('id_cliente')->index('notasfiscais_id_cliente_foreign');
            $table->unsignedInteger('id_venda')->index('notasfiscais_id_venda_foreign');
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
        Schema::dropIfExists('notasfiscais');
    }
}
