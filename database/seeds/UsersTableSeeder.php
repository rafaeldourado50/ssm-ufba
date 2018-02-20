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
                'remember_token' => 'ywtrNqoiANYu99Rotz7i7o1djPtoD4zn1BaJILZarPoQ0QYIPk1ItXXS72WI',
                'created_at' => '2018-02-01 01:53:23',
                'updated_at' => '2018-02-20 21:30:03',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Naara Musse',
                'email' => 'naara.musse@gmail.com',
                'password' => '$2y$10$r3IwYJeL8mzdrHd5M4cJ2uERwUDMeIlJ508x8T0MTyDJBDHMvuHUy',
                'remember_token' => '9SHl2opqV5xL30eGZuVAMngnDajfhIbWHZT0YdDsNHqCnftsJkfadEhKktnV',
                'created_at' => '2018-02-03 00:03:55',
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Deuana Teles',
                'email' => 'deuanateles@gmail.com',
                'password' => '$2y$10$j7KyJtxPsme5n4XZ2kjQ6ewT/YajYqvx8LoyQU04h6Gh2Zx7hKsh.',
                'remember_token' => 'gImQvo84FcGti5uQLMXm1sF0PivzECvT5FAWXPkYW3stS9iTGpKxOh2x4c24',
                'created_at' => '2018-02-03 00:05:25',
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}
