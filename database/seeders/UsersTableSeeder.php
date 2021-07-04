<?php

namespace Database\Seeders;

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
                'name' => 'Samson',
                'email' => 'test@gmail.com',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$10$7AaCHITRZ9zhdL1UIroGve3L.W0F9Lv0YXKco6kgP7EWX36psAkJm',
                'remember_token' => NULL,
                'settings' => NULL,
                'created_at' => '2020-11-18 18:30:39',
                'updated_at' => '2021-05-01 09:54:59',
            ),
            1 => 
            array (
                'id' => 2,
                'role_id' => 1,
                'name' => 'Sinmi',
                'email' => 'james@gmail.com',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$10$5tneKydRK5AixU/CH67TAO0LkL.s4sE0vOpByklIaYorp6tr7i3vm',
                'remember_token' => NULL,
                'settings' => NULL,
                'created_at' => '2021-04-28 19:54:40',
                'updated_at' => '2021-05-01 09:58:18',
            ),
            2 => 
            array (
                'id' => 3,
                'role_id' => 3,
                'name' => 'Damisi',
                'email' => 'damiyoyo@gmail.com',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$10$osoXYkPLsxx1A8IqIAIq/umA47YQaEMq.boHPyhLu293BT3KQtfie',
                'remember_token' => NULL,
                'settings' => '{"locale":"en"}',
                'created_at' => '2021-06-16 21:11:19',
                'updated_at' => '2021-06-17 21:19:10',
            ),
        ));
        
        
    }
}