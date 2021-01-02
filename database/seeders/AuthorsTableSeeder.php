<?php

use Illuminate\Database\Seeder;

class AuthorsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('authors')->delete();
        
        \DB::table('authors')->insert(array (
            0 => 
            array (
                'id' => 1,
                'first_name' => 'Gabriele',
                'name' => 'Gugetzer',
                'created_at' => '2020-12-14 21:07:51',
                'updated_at' => '2020-12-14 21:07:51',
            ),
            1 => 
            array (
                'id' => 2,
                'first_name' => 'Margit',
                'name' => 'Proebst',
                'created_at' => '2020-12-14 21:07:51',
                'updated_at' => '2020-12-14 21:07:51',
            ),
            2 => 
            array (
                'id' => 3,
                'first_name' => 'Inga',
                'name' => 'Pfannebecker',
                'created_at' => '2020-12-14 21:07:51',
                'updated_at' => '2020-12-14 21:07:51',
            ),
            3 => 
            array (
                'id' => 4,
                'first_name' => 'Tanja',
                'name' => 'Dusy',
                'created_at' => '2020-12-14 21:07:51',
                'updated_at' => '2020-12-14 21:07:51',
            ),
            4 => 
            array (
                'id' => 5,
                'first_name' => 'Angelika',
                'name' => 'Ilies',
                'created_at' => '2020-12-14 21:07:51',
                'updated_at' => '2020-12-14 21:07:51',
            ),
            5 => 
            array (
                'id' => 6,
                'first_name' => 'Martin',
                'name' => 'Kintrup',
                'created_at' => '2020-12-14 21:07:51',
                'updated_at' => '2020-12-14 21:07:51',
            ),
            6 => 
            array (
                'id' => 7,
                'first_name' => '',
                'name' => 'Diverse',
                'created_at' => '2020-12-14 21:15:02',
                'updated_at' => '2020-12-14 21:15:02',
            ),
            7 => 
            array (
                'id' => 8,
                'first_name' => 'Daniel',
                'name' => 'Wiechmann',
                'created_at' => '2020-12-14 21:16:17',
                'updated_at' => '2020-12-14 21:16:17',
            ),
        ));
        
        
    }
}