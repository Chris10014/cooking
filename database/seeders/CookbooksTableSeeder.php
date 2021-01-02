<?php

use Illuminate\Database\Seeder;

class CookbooksTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('cookbooks')->delete();
        
        \DB::table('cookbooks')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'Vegan',
                'author_id' => 1,
                'publisher_id' => 1,
                'created_at' => '2020-12-14 21:10:15',
                'updated_at' => '2020-12-14 21:10:15',
            ),
            1 => 
            array (
                'id' => 2,
                'title' => 'Italienische Blitzmenüs',
                'author_id' => 2,
                'publisher_id' => 1,
                'created_at' => '2020-12-14 21:10:15',
                'updated_at' => '2020-12-14 21:10:15',
            ),
            2 => 
            array (
                'id' => 3,
                'title' => 'Expresskochen Low Carb',
                'author_id' => 3,
                'publisher_id' => 1,
                'created_at' => '2020-12-14 21:11:52',
                'updated_at' => '2020-12-14 21:11:52',
            ),
            3 => 
            array (
                'id' => 4,
                'title' => '1 Salat - 50 Dressings',
                'author_id' => 4,
                'publisher_id' => 1,
                'created_at' => '2020-12-14 21:11:52',
                'updated_at' => '2020-12-14 21:11:52',
            ),
            4 => 
            array (
                'id' => 5,
                'title' => 'Schneller auf den Teller',
                'author_id' => 5,
                'publisher_id' => 1,
                'created_at' => '2020-12-14 21:13:34',
                'updated_at' => '2020-12-14 21:13:34',
            ),
            5 => 
            array (
                'id' => 6,
                'title' => 'Vegetarisch für Faule',
                'author_id' => 6,
                'publisher_id' => 1,
                'created_at' => '2020-12-14 21:13:34',
                'updated_at' => '2020-12-14 21:13:34',
            ),
            6 => 
            array (
                'id' => 7,
                'title' => 'Single-Küche für Faule',
                'author_id' => 6,
                'publisher_id' => 1,
                'created_at' => '2020-12-14 21:13:34',
                'updated_at' => '2020-12-14 21:13:34',
            ),
            7 => 
            array (
                'id' => 8,
                'title' => 'Eigene Sammlung',
                'author_id' => 7,
                'publisher_id' => NULL,
                'created_at' => '2020-12-14 21:14:20',
                'updated_at' => '2020-12-14 21:14:20',
            ),
            8 => 
            array (
                'id' => 9,
                'title' => 'Low-Carb mit dem Spiralschneider',
                'author_id' => 8,
                'publisher_id' => 2,
                'created_at' => '2020-12-14 21:17:01',
                'updated_at' => '2020-12-14 21:17:01',
            ),
        ));
        
        
    }
}