<?php

use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('permissions')->insert([
        'name' => 'list permissions',
      ]);
      DB::table('permissions')->insert([
        'name' => 'edit permission',
      ]);
      DB::table('permissions')->insert([
        'name' => 'list roles',
      ]);
      DB::table('permissions')->insert([
        'name' => 'edit role',
      ]);
      DB::table('permissions')->insert([
        'name' => 'list users',
      ]);
      DB::table('permissions')->insert([
        'name' => 'edit user',
      ]);
    }
}
