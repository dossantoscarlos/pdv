<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeysToEstoques extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('estoques', function (Blueprint $table) {
            $table->foreign('id_produto')->references('id')->on('produtos');
            $table->foreign('id_nivel')->references('id')->on('nivel');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('estoques', function (Blueprint $table) {
             $table->dropForeign('estoques_id_produto_foreign');
             $table->dropForeign('estoques_id_nivel_foreign');
        });
    }
}
