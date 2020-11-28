<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecipesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recipes', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('recipe_image')->nullable();
            $table->integer('preparation_time')->nullable();
            $table->integer('page')->nullable();
            $table->foreignId('cookbook_id')->nullable()->constrained();
            $table->foreignId('dish_type_id')->constrained();
            $table->foreignId('course_id')->constrained();
            $table->timestamps();

            $table->unique(['name', 'cookbook_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('recipes');
    }
}
