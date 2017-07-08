<?php

use Illuminate\Database\Seeder;

class CardGameTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('card_game')->delete();
        
        \DB::table('card_game')->insert(array (
            0 => 
            array (
                'id' => 107,
                'id_card' => 8,
                'id_game' => 9,
            ),
            1 => 
            array (
                'id' => 108,
                'id_card' => 8,
                'id_game' => 9,
            ),
            2 => 
            array (
                'id' => 109,
                'id_card' => 8,
                'id_game' => 9,
            ),
            3 => 
            array (
                'id' => 110,
                'id_card' => 8,
                'id_game' => 9,
            ),
            4 => 
            array (
                'id' => 111,
                'id_card' => 8,
                'id_game' => 9,
            ),
            5 => 
            array (
                'id' => 112,
                'id_card' => 8,
                'id_game' => 9,
            ),
        ));
        
        
    }
}