<?php

use Illuminate\Database\Seeder;

class PublishersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('publishers')->delete();
        
        \DB::table('publishers')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'G|U',
                'created_at' => '2020-12-20 18:21:39',
                'updated_at' => '2020-12-20 18:21:39',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'riva',
                'created_at' => '2020-12-20 18:21:39',
                'updated_at' => '2020-12-20 18:21:39',
            ),
        ));
        
        
    }
}