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
			$table->integer('pre_discipline_id')->nullable()->index('index_pre_requisites_on_pre_discipline_id');
			$table->integer('post_discipline_id')->nullable()->index('index_pre_requisites_on_post_discipline_id');
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
		Schema::drop('pre_requisites');
	}

}
