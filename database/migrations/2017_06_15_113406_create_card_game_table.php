<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCardGameTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('card_game', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_card')->unsigned();
            $table->integer('id_game')->unsigned();

            $table->foreign('id_card')
                ->references('id')
                ->on('card');
            $table->foreign('id_game')
                ->references('id')
                ->on('game');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('card_game');
    }
}
