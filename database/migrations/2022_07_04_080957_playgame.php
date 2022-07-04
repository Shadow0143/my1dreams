<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Playgame extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('play_games', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('game_no');
            $table->string('game_time');
            $table->string('refral_code');
            $table->integer('amount');
            $table->unsignedBigInteger('user_id');
            $table->integer('status')->nullable();
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
       
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('play_games');
    }
}
