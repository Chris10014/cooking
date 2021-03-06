<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(CoursesTableSeeder::class);
        $this->call(DishTypesTableSeeder::class);
        $this->call(FoodGroupsTableSeeder::class);
        $this->call(GroceryDivisionsTableSeeder::class);
        $this->call(UnitsTableSeeder::class);
        $this->call(AuthorsTableSeeder::class);
        $this->call(CookbooksTableSeeder::class);
        $this->call(IncredientsTableSeeder::class);
        $this->call(PublishersTableSeeder::class);
    }
}
