<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateNullablesToIncredientRecipeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('incredient_recipe', function (Blueprint $table) {
            $table->foreignId('quantity_id')->nullable()->change();
            $table->foreignId('unit_id')->nullable()->change();
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
