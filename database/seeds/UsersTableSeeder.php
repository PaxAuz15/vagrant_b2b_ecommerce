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
            1 =>
            array (
                'id' => 2,
                'role_id' => 1,
                'name' => 'Admin',
                'email' => 'admin@emprendiste.com',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$10$NJBQDBmcH.xG9nSx9rT4j.EY4z1dpqGyyatOCwaz/8r0fMU.pST1i',
                'remember_token' => NULL,
                'settings' => NULL,
                'created_at' => '2020-02-09 14:02:38',
                'updated_at' => '2020-02-14 09:55:11',
            ),
            2 =>
            array (
                'id' => 3,
                'role_id' => 2,
                'name' => 'Customer 1',
                'email' => 'customer1@emprendiste.com',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$10$NJBQDBmcH.xG9nSx9rT4j.EY4z1dpqGyyatOCwaz/8r0fMU.pST1i',
                'remember_token' => NULL,
                'settings' => NULL,
                'created_at' => '2020-02-09 14:02:38',
                'updated_at' => '2020-02-14 09:55:11',
            ),
            3 =>
            array (
                'id' => 4,
                'role_id' => 2,
                'name' => 'Customer 2',
                'email' => 'customer2@emprendiste.com',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$10$NJBQDBmcH.xG9nSx9rT4j.EY4z1dpqGyyatOCwaz/8r0fMU.pST1i',
                'remember_token' => NULL,
                'settings' => NULL,
                'created_at' => '2020-02-09 14:02:38',
                'updated_at' => '2020-02-14 09:55:11',
            ),
            4 =>
            array (
                'id' => 5,
                'role_id' => 3,
                'name' => 'Seller 1',
                'email' => 'seller1@webmall.com',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$10$NJBQDBmcH.xG9nSx9rT4j.EY4z1dpqGyyatOCwaz/8r0fMU.pST1i',
                'remember_token' => NULL,
                'settings' => NULL,
                'created_at' => '2020-02-20 00:16:34',
                'updated_at' => '2020-02-20 00:16:34',
            ),
            5 =>
            array (
                'id' => 6,
                'role_id' => 3,
                'name' => 'Seller 2',
                'email' => 'seller2@webmall.com',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$10$NJBQDBmcH.xG9nSx9rT4j.EY4z1dpqGyyatOCwaz/8r0fMU.pST1i',
                'remember_token' => NULL,
                'settings' => NULL,
                'created_at' => '2020-02-20 00:16:34',
                'updated_at' => '2020-02-20 00:16:34',
            ),
        ));


    }
}
