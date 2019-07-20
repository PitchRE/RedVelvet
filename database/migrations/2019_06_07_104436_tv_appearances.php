<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TvAppearances extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */


    public function up()
    {
        Schema::create('tv_appearances', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('seulgi')->default(1);
            $table->integer('wendy')->default(1);
            $table->integer('joy')->default(1);
            $table->integer('yeri')->default(1);
            $table->integer('irene')->default(1);
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
        Schema::dropIfExists('tv_appearances');
    }
}