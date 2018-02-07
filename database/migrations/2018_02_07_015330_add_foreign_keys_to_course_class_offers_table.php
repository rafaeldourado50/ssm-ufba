<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToCourseClassOffersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('course_class_offers', function(Blueprint $table)
		{
			$table->foreign('discipline_class_offer_id', 'fk_course_class_offers_discipline_class_offer_id')->references('id')->on('discipline_class_offers')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('course_id', 'fk_course_class_offers_course_id')->references('id')->on('courses')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('course_class_offers', function(Blueprint $table)
		{
			$table->dropForeign('fk_course_class_offers_discipline_class_offer_id');
			$table->dropForeign('fk_course_class_offers_course_id');
		});
	}

}
