<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDisciplinesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('disciplines', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('code')->index('index_disciplines_on_code');
			$table->string('name');
			$table->string('curriculum')->nullable();
			$table->integer('load')->nullable();
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
		Schema::drop('disciplines');
	}

}
