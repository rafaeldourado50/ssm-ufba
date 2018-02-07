<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToSchedulesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('schedules', function(Blueprint $table)
		{
			$table->foreign('discipline_class_id', 'fk_schedules_discipline_class_id')->references('id')->on('discipline_classes')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('schedules', function(Blueprint $table)
		{
			$table->dropForeign('fk_schedules_discipline_class_id');
		});
	}

}
