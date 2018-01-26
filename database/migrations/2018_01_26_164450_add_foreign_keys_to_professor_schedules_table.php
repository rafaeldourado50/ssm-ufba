<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToProfessorSchedulesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('professor_schedules', function(Blueprint $table)
		{
			$table->foreign('professor_id', 'fk_professors_professor_schedules')->references('id')->on('professors')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('schedule_id', 'fk_schedules_professor_schedules')->references('id')->on('schedules')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('professor_schedules', function(Blueprint $table)
		{
			$table->dropForeign('fk_professors_professor_schedules');
			$table->dropForeign('fk_schedules_professor_schedules');
		});
	}

}
