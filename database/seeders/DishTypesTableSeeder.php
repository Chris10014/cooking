<?php

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
                'glyphicon_fontawesome' => 'fas fa-carrot',
                'created_at' => '2020-10-19 21:27:37',
                'updated_at' => '2020-10-19 21:27:37',
            ),
            1 => 
            array (
                'id' => 2,
                'de' => 'vegan',
                'glyphicon_fontawesome' => 'fas fa-seedling',
                'created_at' => '2020-10-19 21:27:37',
                'updated_at' => '2020-10-19 21:27:37',
            ),
            2 => 
            array (
                'id' => 3,
                'de' => 'Fleisch',
                'glyphicon_fontawesome' => 'fas fa-drumstick-bite',
                'created_at' => '2020-10-19 21:27:37',
                'updated_at' => '2020-10-19 21:27:37',
            ),
            3 => 
            array (
                'id' => 4,
                'de' => 'Fisch',
                'glyphicon_fontawesome' => 'fas fa-fish',
                'created_at' => '2020-10-19 21:27:37',
                'updated_at' => '2020-10-19 21:27:37',
            ),
            4 => 
            array (
                'id' => 5,
                'de' => 'Pasta',
                'glyphicon_fontawesome' => 'fas fa-pizza-slice',
                'created_at' => '2021-02-07 16:49:09',
                'updated_at' => '2021-02-07 16:49:09',
            ),
        ));
        
        
    }
}