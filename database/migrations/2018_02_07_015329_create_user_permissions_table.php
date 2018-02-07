<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUserPermissionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('user_permissions', function(Blueprint $table)
		{
			$table->integer('user_id')->unsigned();
			$table->integer('permission_id')->unsigned()->index('fk_user_permissions_permission_id');
			$table->primary(['user_id','permission_id']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('user_permissions');
	}

}
