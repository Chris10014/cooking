<?php

namespace Database\Seeders;

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
        ));


    }
}
