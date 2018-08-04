<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFidelidadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fidelidades', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tipo');
            $table->char('matrihash',64)->unique();
            $table->char('mensalidade',3)->default('NAO');
            $table->float('valor',10,2)->default(0);
            $table->unsignedInteger('id_cliente')->unique()->index('fidelidades_id_cliente_foreign');
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
        Schema::dropIfExists('fidelidades');
    }
}
