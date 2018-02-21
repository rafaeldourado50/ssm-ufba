<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Rafael Dourado',
                'email' => 'rafaeldourado10@gmail.com',
                'password' => '$2y$10$of4ms.HAuwg7K1YQy34vsuMZVLqJwVbk5EjkLZh5D43mbcX4fv24i',
                'remember_token' => 'iiFMcubQ1pnmLoapSzoPRCJRlWNUrHz1kvqQoeC9n9mAFwRqArJsG11LSZ76',
                'created_at' => '2018-02-01 01:53:23',
                'updated_at' => '2018-02-21 05:57:56',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Naara Musse',
                'email' => 'naara.musse@gmail.com',
                'password' => '$2y$10$r3IwYJeL8mzdrHd5M4cJ2uERwUDMeIlJ508x8T0MTyDJBDHMvuHUy',
                'remember_token' => 'N89eC8MiY3jZ4t9bfbyzajyySMuQZglkwJYw9D48vjpZh03HPsWAstg5TMGb',
                'created_at' => '2018-02-03 00:03:55',
                'updated_at' => '2018-02-21 05:45:42',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Deuana Teles',
                'email' => 'deuanateles@gmail.com',
                'password' => '$2y$10$j7KyJtxPsme5n4XZ2kjQ6ewT/YajYqvx8LoyQU04h6Gh2Zx7hKsh.',
                'remember_token' => 'n46jQw4gbEa2XXhyvWSEgTJ6I935ZIssROkwS1n3t6EzkG3AtptgSLL6T9sE',
                'created_at' => '2018-02-03 00:05:25',
                'updated_at' => '2018-02-21 05:45:58',
            ),
        ));
        
        
    }
}
