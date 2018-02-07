<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePreRequisitesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('pre_requisites', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('pre_discipline_id')->index('fk_pre_requisites_pre_discipline_id');
			$table->integer('post_discipline_id')->index('fk_pre_requisites_post_discipline_id');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('pre_requisites');
	}

}
