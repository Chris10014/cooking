<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class GroceryDivisionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('grocery_divisions')->delete();

        \DB::table('grocery_divisions')->insert(array (
            0 =>
            array (
                'id' => 1,
                'division_name' => 'Obst & Gemüse',
                'created_at' => '2020-10-19 21:35:17',
                'updated_at' => '2020-10-19 21:35:17',
            ),
            1 =>
            array (
                'id' => 2,
                'division_name' => 'Frischetheke',
                'created_at' => '2020-10-19 21:35:17',
                'updated_at' => '2020-10-19 21:35:17',
            ),
            2 =>
            array (
                'id' => 3,
                'division_name' => 'Backwaren',
                'created_at' => '2020-10-19 21:35:17',
                'updated_at' => '2020-10-19 21:35:17',
            ),
            3 =>
            array (
                'id' => 4,
                'division_name' => 'Konserven',
                'created_at' => '2020-10-19 21:35:17',
                'updated_at' => '2020-10-19 21:35:17',
            ),
            4 =>
            array (
                'id' => 5,
                'division_name' => 'Kühlregal',
                'created_at' => '2020-10-19 21:35:17',
                'updated_at' => '2020-10-19 21:35:17',
            ),
            5 =>
            array (
                'id' => 6,
                'division_name' => 'Delikatessen',
                'created_at' => '2020-10-19 21:35:17',
                'updated_at' => '2020-10-19 21:35:17',
            ),
            6 =>
            array (
                'id' => 7,
                'division_name' => 'Gefriertheke',
                'created_at' => '2020-10-19 21:35:17',
                'updated_at' => '2020-10-19 21:35:17',
            ),
        ));


    }
}
