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
                'id' => 9,
                'name' => 'ทดสอบ',
                'player' => 6,
                'created_at' => '2017-07-08 07:20:49',
                'updated_at' => '2017-07-08 07:20:49',
            ),
        ));
        
        
    }
}