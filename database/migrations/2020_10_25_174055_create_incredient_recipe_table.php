<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIncredientRecipeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('incredient_recipe', function (Blueprint $table) {
            $table->foreignId('incredient_id')->onDelete('cascade')->constrained();
            $table->foreignId('recipe_id')->onDelete('cascade')->constrained();
            $table->double('quantity', 4, 1)->nullable();
            $table->foreignId('unit_id')->nullable()->cascadeOnDelete()->constrained();
            $table->boolean('main_incredient')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('incredient_recipe');
    }
}
