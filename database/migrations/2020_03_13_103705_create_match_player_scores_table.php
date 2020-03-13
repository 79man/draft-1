<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMatchPlayerScoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('match_player_scores', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('match_id')->nullable();
            $table->foreign('match_id')->references('id')->on('matches');
            $table->unsignedBigInteger('player_id')->nullable();
            $table->foreign('player_id')->references('id')->on('players');
            $table->morphs('scorable');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('match_player_scores');
    }
}