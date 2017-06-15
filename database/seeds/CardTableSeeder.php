<?php

use Illuminate\Database\Seeder;

class CardTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('card')->delete();
        
        \DB::table('card')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'WEREWOLF',
                'effect' => 'Each night, wake with the other Werewolves and choose a player to eliminate.',
                'image' => 0,
                'point' => -6,
                'created_at' => '2017-06-13 14:57:43',
                'updated_at' => '2017-06-13 14:57:45',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'WOLF CUB',
                'effect' => 'Each night, wake with the Werewolves. if uou are eliminated, the Werewolves eliminate two players the following night.',
                'image' => 1,
                'point' => -8,
                'created_at' => '2017-06-13 15:00:25',
                'updated_at' => '2017-06-13 15:00:27',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'VILLGER',
                'effect' => 'Find the Werewolves and eliminate them.',
                'image' => 3,
                'point' => 1,
                'created_at' => '2017-06-13 08:39:11',
                'updated_at' => '2017-06-13 08:39:11',
            ),
            3 => 
            array (
                'id' => 5,
                'name' => 'MASON',
                'effect' => 'The first night, wake up to see who the other Mason is.',
                'image' => 4,
                'point' => 2,
                'created_at' => '2017-06-13 08:41:41',
                'updated_at' => '2017-06-13 08:41:41',
            ),
        ));
        
        
    }
}