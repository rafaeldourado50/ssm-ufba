<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDisciplineClassesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('discipline_classes', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('discipline_id')->nullable()->index('index_discipline_classes_on_discipline_id');
			$table->string('class_number')->nullable();
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
		Schema::drop('discipline_classes');
	}

}
