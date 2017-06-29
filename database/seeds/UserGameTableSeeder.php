<?php

use Illuminate\Database\Seeder;

class UserGameTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('user_game')->delete();
        
        \DB::table('user_game')->insert(array (
            0 => 
            array (
                'id' => 1,
                'id_user' => 2,
                'id_game' => 5,
            ),
            1 => 
            array (
                'id' => 3,
                'id_user' => 3,
                'id_game' => 5,
            ),
            2 => 
            array (
                'id' => 4,
                'id_user' => 3,
                'id_game' => 6,
            ),
        ));
        
        
    }
}