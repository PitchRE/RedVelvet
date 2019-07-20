<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Achievement extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    public function up()
    {
        Schema::create('achievement', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('seulgi')->default(1);
            $table->integer('wendy')->default(1);
            $table->integer('joy')->default(1);
            $table->integer('yeri')->default(1);
            $table->integer('irene')->default(1);
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('achievement');
    }
}