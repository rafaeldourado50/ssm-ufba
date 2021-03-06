<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCourseDisciplinesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('course_disciplines', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('semester')->nullable();
			$table->string('nature', 3)->nullable();
			$table->integer('course_id')->index('fk_course_disciplines_course_id');
			$table->integer('discipline_id')->index('fk_course_disciplines_discipline_id');
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
		Schema::drop('course_disciplines');
	}

}
