<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToUserPermissionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('user_permissions', function(Blueprint $table)
		{
			$table->foreign('permission_id', 'fk_user_permissions_permission_id')->references('id')->on('permissions')->onUpdate('RESTRICT')->onDelete('CASCADE');
			$table->foreign('user_id', 'fk_user_permissions_user_id')->references('id')->on('users')->onUpdate('RESTRICT')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('user_permissions', function(Blueprint $table)
		{
			$table->dropForeign('fk_user_permissions_permission_id');
			$table->dropForeign('fk_user_permissions_user_id');
		});
	}

}
