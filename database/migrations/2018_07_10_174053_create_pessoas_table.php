<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePessoasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pessoas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome_completo',191);
            $table->char('cpf',14)->unique();
            $table->string('complemento',100);
            $table->integer('residencia_numero');
            $table->char('id_cep',10)->index('pessoas_id_cep_foreign');
            $table->char('sexo',10);
            $table->string('status_civil',100)->default('SOLTEIRO(A)');
            $table->char('fixo', 11);
            $table->char('celular',12);
            $table->string('email')->unique();
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
        Schema::dropIfExists('pessoas');
    }
}
