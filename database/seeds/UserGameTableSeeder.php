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
                'id' => 8,
                'id_user' => 2,
                'id_game' => 9,
            ),
        ));
        
        
    }
}