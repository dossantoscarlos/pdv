<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToAdminstradoresTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('adminstradores', function(Blueprint $table)
		{
			$table->foreign('id_funcionario')->references('id')->on('funcionarios');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('adminstradores', function(Blueprint $table)
		{
			$table->dropForeign('adminstradores_id_funcionario_foreign');
		});
	}

}
