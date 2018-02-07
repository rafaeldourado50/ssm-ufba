<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDisciplineClassOffersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('discipline_class_offers', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('discipline_class_id')->index('fk_discipline_class_offers_discipline_class_id');
			$table->integer('vacancies')->nullable();
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
		Schema::drop('discipline_class_offers');
	}

}
