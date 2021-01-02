<?php

use Illuminate\Database\Seeder;

class CoursesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('Courses')->delete();
        
        \DB::table('Courses')->insert(array (
            0 => 
            array (
                'id' => 1,
                'de' => 'Vorspeise',
                'created_at' => '2020-10-19 19:47:37',
                'updated_at' => '2020-10-19 19:47:37',
            ),
            1 => 
            array (
                'id' => 2,
                'de' => 'Suppe',
                'created_at' => '2020-10-19 19:47:37',
                'updated_at' => '2020-10-19 19:47:37',
            ),
            2 => 
            array (
                'id' => 3,
                'de' => 'Hauptgericht',
                'created_at' => '2020-10-19 19:47:37',
                'updated_at' => '2020-10-19 19:47:37',
            ),
            3 => 
            array (
                'id' => 4,
                'de' => 'Nachtisch',
                'created_at' => '2020-10-19 19:47:37',
                'updated_at' => '2020-10-19 19:47:37',
            ),
        ));
        
        
    }
}