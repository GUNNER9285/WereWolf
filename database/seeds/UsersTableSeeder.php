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
                'name' => 'ABC',
                'email' => 'WASD',
                'password' => '1234',
                'remember_token' => NULL,
                'created_at' => '2017-06-20 16:04:38',
                'updated_at' => '2017-06-20 16:04:40',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'XYZ',
                'email' => 'vwxyz@abc.com',
                'password' => '$2y$10$.Hg84P25j5lRzX.ybWH1buWgWkIgKM3OrULwkSmgGcRh/25fWslY2',
                'remember_token' => 'tGEAt1DY41sXj1PILPYjevuxPKlkjIbnuOqP7RtxSbxiZdxpXcrwFhnFo8Yo',
                'created_at' => '2017-06-20 09:16:43',
                'updated_at' => '2017-06-20 09:16:43',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'ABC',
                'email' => 'abcde@gmail.com',
                'password' => '$2y$10$vCF5E8/VT4bHg.ruFzBr4uOm3c/RGRyfsRHi4fpSYF3TY1K37PvK6',
                'remember_token' => 'fqkLDaDmglAz44InnHro061Cjuwl85LTKg3izB9XPGXazo7enqaXjhW3vjgA',
                'created_at' => '2017-06-20 09:54:24',
                'updated_at' => '2017-06-20 09:54:24',
            ),
        ));
        
        
    }
}