<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddImgeurlColumnToMarkpoint extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('markpoint', function (Blueprint $table) {
            $table->string('image_url');
        });
        Schema::table('card', function (Blueprint $table) {
            $table->string('image_url');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('markpoint', function (Blueprint $table) {
            //
            $table->dropColumn('image_url');
        });
        Schema::table('card', function (Blueprint $table) {
            $table->dropColumn('image_url');
        });
    }
}
