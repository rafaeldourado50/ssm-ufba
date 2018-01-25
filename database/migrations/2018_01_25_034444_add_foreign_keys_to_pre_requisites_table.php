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
			$table->foreign('pre_discipline_id', 'fk_course_disciplines_pre_requisites')->references('id')->on('course_disciplines')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('post_discipline_id', 'fk_course_disciplines_pre_requisites_2')->references('id')->on('course_disciplines')->onUpdate('RESTRICT')->onDelete('RESTRICT');
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
			$table->dropForeign('fk_course_disciplines_pre_requisites');
			$table->dropForeign('fk_course_disciplines_pre_requisites_2');
		});
	}

}
