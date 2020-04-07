<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRacesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('races', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('p1_id')->references('id')->on('users')->onDelete('cascade');
            $table->integer('p2_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('p1_vod')->unique();
            $table->string('p2_vod')->unique();
            $table->dateTime('p1_time');
            $table->dateTime('p2_time');
            $table->dateTime('deadline');
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
        Schema::dropIfExists('races');
    }
}
