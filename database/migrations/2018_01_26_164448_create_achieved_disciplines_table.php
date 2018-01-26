<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAchievedDisciplinesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('achieved_disciplines', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('student_id')->index('index_achieved_disciplines_on_student_id');
			$table->integer('discipline_id')->index('index_achieved_disciplines_on_discipline_id');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('achieved_disciplines');
	}

}
