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
                'id' => 3,
                'id_card' => 1,
                'id_game' => 1,
            ),
            1 => 
            array (
                'id' => 4,
                'id_card' => 2,
                'id_game' => 1,
            ),
            2 => 
            array (
                'id' => 5,
                'id_card' => 3,
                'id_game' => 1,
            ),
            3 => 
            array (
                'id' => 6,
                'id_card' => 3,
                'id_game' => 1,
            ),
            4 => 
            array (
                'id' => 7,
                'id_card' => 1,
                'id_game' => 5,
            ),
            5 => 
            array (
                'id' => 8,
                'id_card' => 1,
                'id_game' => 5,
            ),
            6 => 
            array (
                'id' => 9,
                'id_card' => 3,
                'id_game' => 5,
            ),
            7 => 
            array (
                'id' => 10,
                'id_card' => 6,
                'id_game' => 5,
            ),
            8 => 
            array (
                'id' => 11,
                'id_card' => 7,
                'id_game' => 5,
            ),
            9 => 
            array (
                'id' => 12,
                'id_card' => 1,
                'id_game' => 6,
            ),
            10 => 
            array (
                'id' => 13,
                'id_card' => 1,
                'id_game' => 6,
            ),
            11 => 
            array (
                'id' => 14,
                'id_card' => 1,
                'id_game' => 6,
            ),
            12 => 
            array (
                'id' => 15,
                'id_card' => 1,
                'id_game' => 6,
            ),
            13 => 
            array (
                'id' => 16,
                'id_card' => 1,
                'id_game' => 6,
            ),
            14 => 
            array (
                'id' => 37,
                'id_card' => 1,
                'id_game' => 7,
            ),
            15 => 
            array (
                'id' => 38,
                'id_card' => 1,
                'id_game' => 7,
            ),
            16 => 
            array (
                'id' => 39,
                'id_card' => 3,
                'id_game' => 7,
            ),
            17 => 
            array (
                'id' => 40,
                'id_card' => 6,
                'id_game' => 7,
            ),
            18 => 
            array (
                'id' => 41,
                'id_card' => 7,
                'id_game' => 7,
            ),
        ));
        
        
    }
}