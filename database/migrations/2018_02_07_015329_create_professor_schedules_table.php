<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProfessorSchedulesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('professor_schedules', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('schedule_id')->index('fk_professor_schedules_schedule_id');
			$table->integer('professor_id')->index('fk_professor_schedules_professor_id');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('professor_schedules');
	}

}
