<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSchedulesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('schedules', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('day')->nullable();
			$table->integer('start_hour')->nullable();
			$table->integer('start_minute')->nullable();
			$table->integer('discipline_class_id')->index('fk_schedules_discipline_class_id');
			$table->integer('end_hour')->nullable();
			$table->integer('end_minute')->nullable();
			$table->integer('first_class_number')->nullable();
			$table->integer('class_count')->nullable();
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
		Schema::drop('schedules');
	}

}
