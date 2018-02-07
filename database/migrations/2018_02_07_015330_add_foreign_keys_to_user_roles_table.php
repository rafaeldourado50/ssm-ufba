<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToUserRolesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('user_roles', function(Blueprint $table)
		{
			$table->foreign('user_id', 'fk_user_roles_user_id')->references('id')->on('users')->onUpdate('RESTRICT')->onDelete('CASCADE');
			$table->foreign('role_id', 'fk_user_roles_role_id')->references('id')->on('roles')->onUpdate('RESTRICT')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('user_roles', function(Blueprint $table)
		{
			$table->dropForeign('fk_user_roles_user_id');
			$table->dropForeign('fk_user_roles_role_id');
		});
	}

}
