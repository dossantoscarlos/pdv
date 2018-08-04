<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCaixasTable extends Migration
{ 
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('caixas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_status')->unsigned()->index('caixas_id_status_foreign')->default(1);
            $table->float('valor_inicial',10,2);
            $table->float('valor_final',10,2);
            $table->unsignedInteger('id_users')->index('caixas_id_users_foreign');
            $table->float('sangria',10,2);
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
        Schema::dropIfExists('caixas');
    }
}
