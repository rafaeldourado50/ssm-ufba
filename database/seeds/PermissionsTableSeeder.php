<?php

use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('permissions')->delete();
        
        \DB::table('permissions')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'list areas',
                'created_at' => '2018-02-01 20:19:02',
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'edit area',
                'created_at' => '2018-02-01 20:19:18',
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'list courses',
                'created_at' => '2018-02-01 20:21:09',
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'edit course',
                'created_at' => '2018-02-01 20:21:24',
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'list disciplines',
                'created_at' => '2018-02-01 20:21:38',
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'edit discipline',
                'created_at' => '2018-02-01 20:21:48',
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'list professors',
                'created_at' => '2018-02-01 20:22:07',
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'edit professor',
                'created_at' => '2018-02-01 20:22:22',
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'list students',
                'created_at' => '2018-02-01 20:22:37',
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'edit student',
                'created_at' => '2018-02-01 20:22:50',
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'list permissions',
                'created_at' => '2018-02-01 20:23:50',
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'edit permission',
                'created_at' => '2018-02-01 20:24:50',
                'updated_at' => NULL,
            ),
            12 => 
            array (
                'id' => 13,
                'name' => 'list roles',
                'created_at' => '2018-02-01 20:25:50',
                'updated_at' => NULL,
            ),
            13 => 
            array (
                'id' => 14,
                'name' => 'edit role',
                'created_at' => '2018-02-01 20:26:50',
                'updated_at' => NULL,
            ),
            14 => 
            array (
                'id' => 15,
                'name' => 'list users',
                'created_at' => '2018-02-01 20:27:50',
                'updated_at' => NULL,
            ),
            15 => 
            array (
                'id' => 16,
                'name' => 'edit user',
                'created_at' => '2018-02-01 20:28:50',
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}
