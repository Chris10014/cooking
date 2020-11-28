<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIncredientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('incredients', function (Blueprint $table) {
            $table->id();
            $table->string('incredient_de')->unique();
            $table->bigInteger('grocery_division_id')->nullable()->constrained();
            $table->bigInteger('food_group_id')->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('incredients');
    }
}
