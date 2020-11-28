<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsToIncredientRecipeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('incredient_recipe', function (Blueprint $table) {
            // $table->foreignId('quantity_id')->constrained()->cascadeOnDelete()->after('recipe_id');
            // $table->foreignId('unit_id')->constrained()->cascadeOnDelete()->after('quantity_id');
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
