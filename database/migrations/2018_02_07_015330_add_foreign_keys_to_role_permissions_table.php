<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToRolePermissionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('role_permissions', function(Blueprint $table)
		{
			$table->foreign('role_id', 'fk_role_permissions_role_id')->references('id')->on('roles')->onUpdate('RESTRICT')->onDelete('CASCADE');
			$table->foreign('permission_id', 'fk_role_permissions_permission_id')->references('id')->on('permissions')->onUpdate('RESTRICT')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('role_permissions', function(Blueprint $table)
		{
			$table->dropForeign('fk_role_permissions_role_id');
			$table->dropForeign('fk_role_permissions_permission_id');
		});
	}

}
