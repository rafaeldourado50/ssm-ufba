<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToDisciplineClassesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('discipline_classes', function(Blueprint $table)
		{
			$table->foreign('discipline_id', 'fk_disciplines_discipline_classes')->references('id')->on('disciplines')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('discipline_classes', function(Blueprint $table)
		{
			$table->dropForeign('fk_disciplines_discipline_classes');
		});
	}

}
