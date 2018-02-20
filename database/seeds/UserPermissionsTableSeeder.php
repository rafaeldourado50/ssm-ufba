<?php

use Illuminate\Database\Seeder;

class UserPermissionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('user_permissions')->delete();
        
        \DB::table('user_permissions')->insert(array (
            0 => 
            array (
                'user_id' => 1,
                'permission_id' => 11,
            ),
            1 => 
            array (
                'user_id' => 1,
                'permission_id' => 12,
            ),
            2 => 
            array (
                'user_id' => 1,
                'permission_id' => 13,
            ),
            3 => 
            array (
                'user_id' => 1,
                'permission_id' => 14,
            ),
            4 => 
            array (
                'user_id' => 1,
                'permission_id' => 15,
            ),
            5 => 
            array (
                'user_id' => 1,
                'permission_id' => 16,
            ),
        ));
        
        
    }
}
