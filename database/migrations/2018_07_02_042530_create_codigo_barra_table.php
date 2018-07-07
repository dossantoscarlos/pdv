<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCodigoBarraTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('codigobarra', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('serial')->unique();
            $table->unsignedInteger('id_produto')->unique()->index('codigobarra_id_produto_foreign');
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
        Schema::dropIfExists('codigobarra');
    }
}
