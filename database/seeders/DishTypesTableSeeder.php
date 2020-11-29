<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DishTypesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('dish_types')->delete();

        \DB::table('dish_types')->insert(array (
            0 =>
            array (
                'id' => 1,
                'de' => 'vegetarisch',
                'created_at' => '2020-10-19 21:27:37',
                'updated_at' => '2020-10-19 21:27:37',
            ),
            1 =>
            array (
                'id' => 2,
                'de' => 'vegan',
                'created_at' => '2020-10-19 21:27:37',
                'updated_at' => '2020-10-19 21:27:37',
            ),
            2 =>
            array (
                'id' => 3,
                'de' => 'Fleisch',
                'created_at' => '2020-10-19 21:27:37',
                'updated_at' => '2020-10-19 21:27:37',
            ),
            3 =>
            array (
                'id' => 4,
                'de' => 'Fisch',
                'created_at' => '2020-10-19 21:27:37',
                'updated_at' => '2020-10-19 21:27:37',
            ),
        ));


    }
}
