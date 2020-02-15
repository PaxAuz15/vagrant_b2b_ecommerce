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
                'role_id' => 1,
                'name' => 'Luis Auz',
                'email' => 'luisauz.geek@gmail.com',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$10$NJBQDBmcH.xG9nSx9rT4j.EY4z1dpqGyyatOCwaz/8r0fMU.pST1i',
                'remember_token' => NULL,
                'settings' => NULL,
                'created_at' => '2020-02-09 14:02:38',
                'updated_at' => '2020-02-14 09:55:11',
            ),
        ));
        
        
    }
}