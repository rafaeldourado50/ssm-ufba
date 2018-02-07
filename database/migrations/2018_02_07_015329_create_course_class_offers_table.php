<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCourseClassOffersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('course_class_offers', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('course_id')->index('fk_course_class_offers_course_id');
			$table->integer('discipline_class_offer_id')->index('fk_course_class_offers_discipline_class_offer_id');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('course_class_offers');
	}

}
