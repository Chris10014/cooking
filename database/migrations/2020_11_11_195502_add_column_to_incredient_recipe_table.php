<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnToIncredientRecipeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('incredient_recipe', function (Blueprint $table) {
            $table->boolean('main_incredient')->nullable()->after('recipe_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('incredient_recipe', function (Blueprint $table) {
            //
        });
    }
}
