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
			$table->integer('schedule_id')->nullable()->index('index_professor_schedules_on_schedule_id');
			$table->integer('professor_id')->nullable()->index('index_professor_schedules_on_professor_id');
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
		Schema::drop('professor_schedules');
	}

}
