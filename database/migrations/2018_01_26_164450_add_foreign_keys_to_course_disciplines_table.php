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
			$table->foreign('course_id', 'fk_courses_course_disciplines')->references('id')->on('courses')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('discipline_id', 'fk_disciplines_course_disciplines')->references('id')->on('disciplines')->onUpdate('RESTRICT')->onDelete('RESTRICT');
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
			$table->dropForeign('fk_courses_course_disciplines');
			$table->dropForeign('fk_disciplines_course_disciplines');
		});
	}

}
