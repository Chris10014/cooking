<?php

use Illuminate\Database\Seeder;

class FoodGroupsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('food_groups')->delete();
        
        \DB::table('food_groups')->insert(array (
            0 => 
            array (
                'id' => 1,
                'food_group_de' => 'Fleisch',
                'created_at' => '2020-10-19 21:31:32',
                'updated_at' => '2020-10-19 21:31:32',
            ),
            1 => 
            array (
                'id' => 2,
                'food_group_de' => 'Gemüse',
                'created_at' => '2020-10-19 21:31:32',
                'updated_at' => '2020-10-19 21:31:32',
            ),
            2 => 
            array (
                'id' => 3,
                'food_group_de' => 'Fisch',
                'created_at' => '2020-10-19 21:31:32',
                'updated_at' => '2020-10-19 21:31:32',
            ),
            3 => 
            array (
                'id' => 4,
                'food_group_de' => 'Pasta',
                'created_at' => '2020-10-19 21:31:32',
                'updated_at' => '2020-10-19 21:31:32',
            ),
            4 => 
            array (
                'id' => 5,
                'food_group_de' => 'Milchprodukte',
                'created_at' => '2020-10-19 21:31:32',
                'updated_at' => '2020-10-19 21:31:32',
            ),
            5 => 
            array (
                'id' => 6,
                'food_group_de' => 'Wurst',
                'created_at' => '2020-10-19 21:31:32',
                'updated_at' => '2020-10-19 21:31:32',
            ),
            6 => 
            array (
                'id' => 7,
                'food_group_de' => 'Käse',
                'created_at' => '2020-10-19 21:31:32',
                'updated_at' => '2020-10-19 21:31:32',
            ),
            7 => 
            array (
                'id' => 8,
                'food_group_de' => 'Konserven',
                'created_at' => '2020-10-19 21:31:32',
                'updated_at' => '2020-10-19 21:31:32',
            ),
            8 => 
            array (
                'id' => 9,
                'food_group_de' => 'Getreide',
                'created_at' => '2020-10-19 21:31:32',
                'updated_at' => '2020-10-19 21:31:32',
            ),
            9 => 
            array (
                'id' => 10,
                'food_group_de' => 'Obst',
                'created_at' => '2020-12-13 18:28:54',
                'updated_at' => '2020-12-13 18:28:54',
            ),
            10 => 
            array (
                'id' => 11,
                'food_group_de' => 'Sonstiges',
                'created_at' => '2020-12-13 18:28:54',
                'updated_at' => '2020-12-13 18:28:54',
            ),
            11 => 
            array (
                'id' => 31,
                'food_group_de' => 'Kräuter',
                'created_at' => '2020-12-20 14:04:25',
                'updated_at' => '2020-12-20 14:04:25',
            ),
            12 => 
            array (
                'id' => 32,
                'food_group_de' => 'Gewürze, Fonds, Pasten',
                'created_at' => '2020-12-20 14:04:25',
                'updated_at' => '2020-12-20 14:04:25',
            ),
            13 => 
            array (
                'id' => 33,
                'food_group_de' => 'Nüsse',
                'created_at' => '2020-12-20 14:04:25',
                'updated_at' => '2020-12-20 14:04:25',
            ),
            14 => 
            array (
                'id' => 34,
                'food_group_de' => 'Getränke',
                'created_at' => '2020-12-20 14:04:25',
                'updated_at' => '2020-12-20 14:04:25',
            ),
            15 => 
            array (
                'id' => 35,
                'food_group_de' => 'Fertigwaren',
                'created_at' => '2020-12-20 14:04:25',
                'updated_at' => '2020-12-20 14:04:25',
            ),
        ));
        
        
    }
}