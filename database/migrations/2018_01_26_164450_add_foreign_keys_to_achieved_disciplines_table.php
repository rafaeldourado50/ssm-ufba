<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToAchievedDisciplinesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('achieved_disciplines', function(Blueprint $table)
		{
			$table->foreign('discipline_id', 'fk_disciplines_achieved_disciplines')->references('id')->on('disciplines')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('student_id', 'fk_students_achieved_disciplines')->references('id')->on('students')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('achieved_disciplines', function(Blueprint $table)
		{
			$table->dropForeign('fk_disciplines_achieved_disciplines');
			$table->dropForeign('fk_students_achieved_disciplines');
		});
	}

}
