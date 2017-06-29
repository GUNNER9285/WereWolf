<?php

use Illuminate\Database\Seeder;

class GameTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('game')->delete();
        
        \DB::table('game')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'TestFirst',
                'player' => 4,
                'created_at' => '2017-06-15 19:42:19',
                'updated_at' => '2017-06-15 19:42:21',
            ),
            1 => 
            array (
                'id' => 4,
                'name' => 'TestSecond',
                'player' => 5,
                'created_at' => '2017-06-19 10:30:05',
                'updated_at' => '2017-06-19 10:30:05',
            ),
            2 => 
            array (
                'id' => 5,
                'name' => 'TestThird',
                'player' => 5,
                'created_at' => '2017-06-19 10:32:21',
                'updated_at' => '2017-06-19 10:32:21',
            ),
            3 => 
            array (
                'id' => 6,
                'name' => 'Test Fourth',
                'player' => 5,
                'created_at' => '2017-06-20 17:41:57',
                'updated_at' => '2017-06-20 17:41:57',
            ),
            4 => 
            array (
                'id' => 7,
                'name' => 'Test Fourth',
                'player' => 5,
                'created_at' => '2017-06-21 10:18:04',
                'updated_at' => '2017-06-21 10:18:04',
            ),
        ));
        
        
    }
}