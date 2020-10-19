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
            $table->string('name')->unique();
            $table->bigInteger('supermarket_division_id');
            $table->bigInteger('food_group_id');
            $table->timestamps();
            
//            $table->foreign('supermarket_division_id')->references('id')->on('supermarket_divisions');
//            $table->foreign('food_group_id')->references('id')->on('food_groups');
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
