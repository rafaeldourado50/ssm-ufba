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
			$table->integer('course_id')->nullable()->index('index_course_class_offers_on_course_id');
			$table->integer('discipline_class_offer_id')->nullable()->index('index_course_class_offers_on_discipline_class_offer_id');
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
		Schema::drop('course_class_offers');
	}

}
