<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToCourseDisciplinesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('course_disciplines', function(Blueprint $table)
		{
			$table->foreign('discipline_id', 'fk_course_disciplines_discipline_id')->references('id')->on('disciplines')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('course_id', 'fk_course_disciplines_course_id')->references('id')->on('courses')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('course_disciplines', function(Blueprint $table)
		{
			$table->dropForeign('fk_course_disciplines_discipline_id');
			$table->dropForeign('fk_course_disciplines_course_id');
		});
	}

}
