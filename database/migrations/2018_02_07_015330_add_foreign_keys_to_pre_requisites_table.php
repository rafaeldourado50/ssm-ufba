<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToPreRequisitesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('pre_requisites', function(Blueprint $table)
		{
			$table->foreign('post_discipline_id', 'fk_pre_requisites_post_discipline_id')->references('id')->on('course_disciplines')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('pre_discipline_id', 'fk_pre_requisites_pre_discipline_id')->references('id')->on('course_disciplines')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('pre_requisites', function(Blueprint $table)
		{
			$table->dropForeign('fk_pre_requisites_post_discipline_id');
			$table->dropForeign('fk_pre_requisites_pre_discipline_id');
		});
	}

}
