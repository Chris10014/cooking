<?php

use Illuminate\Database\Seeder;

class UnitsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('units')->delete();
        
        \DB::table('units')->insert(array (
            0 => 
            array (
                'id' => 1,
                'dimension' => 'Volumen',
                'unit' => 'Milliliter',
                'abbreviation' => 'ml',
                'created_at' => '2020-10-24 21:12:48',
                'updated_at' => '2020-10-24 21:12:48',
            ),
            1 => 
            array (
                'id' => 2,
                'dimension' => 'Gewicht',
                'unit' => 'Gramm',
                'abbreviation' => 'gr',
                'created_at' => '2020-10-24 21:12:48',
                'updated_at' => '2020-10-24 21:12:48',
            ),
            2 => 
            array (
                'id' => 3,
                'dimension' => 'Anzahl',
                'unit' => 'Stück',
                'abbreviation' => 'Stk',
                'created_at' => '2020-10-24 21:12:48',
                'updated_at' => '2020-10-24 21:12:48',
            ),
        ));
        
        
    }
}