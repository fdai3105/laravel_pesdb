<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlayerStatsTable extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('player_stats', function (Blueprint $table) {
            $table->id();
            $table->integer('offensive_awareness');
            $table->integer('ball_control');
            $table->integer('dribbling');
            $table->integer('tight_possession');
            $table->integer('low_pass');
            $table->integer('lofted_pass');
            $table->integer('finishing');
            $table->integer('heading');
            $table->integer('place_kicking');
            $table->integer('curl');
            $table->integer('speed');
            $table->integer('acceleration');
            $table->integer('kicking_power');
            $table->integer('jump');
            $table->integer('physical_contact');
            $table->integer('balance');
            $table->integer('stamina');
            $table->integer('defensive_awareness');
            $table->integer('ball_winning');
            $table->integer('aggression');
            $table->integer('gk_awareness');
            $table->integer('gk_catching');
            $table->integer('gk_clearing');
            $table->integer('gk_reflexes');
            $table->integer('gk_reach');
            $table->integer('ovr');
            $table->integer('ovr_0');  // gk
            $table->integer('ovr_1');  // cb
            $table->integer('ovr_2');  // lb
            $table->integer('ovr_3');  // rb
            $table->integer('ovr_4');  // dmf
            $table->integer('ovr_5');  // cmf
            $table->integer('ovr_6');  // lmf
            $table->integer('ovr_7');  // rmf
            $table->integer('ovr_8');  // amf
            $table->integer('ovr_9');  // lwf
            $table->integer('ovr_10'); // rwf
            $table->integer('ovr_11'); // ff
            $table->integer('ovr_12'); // cf
            $table->foreignId('player_id')->references('id')
                ->on('players')
                ->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('player_stats');
    }
}
