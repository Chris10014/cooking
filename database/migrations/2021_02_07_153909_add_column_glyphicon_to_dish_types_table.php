<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnGlyphiconToDishTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('dish_types', function (Blueprint $table) {
            $table->string('glyphicon_fontawesome')->after('de');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('dish_types', function (Blueprint $table) {
            $table->dropColumn('glyphicon_fontawesome');
        });
    }
}
