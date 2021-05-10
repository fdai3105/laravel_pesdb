<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlayersTable extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('players', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('full_name')->nullable();
            $table->integer('age');
            $table->string('desc');
            $table->integer('ovr');
            $table->string('pos');
            $table->string('position');
            $table->integer('max_level')->nullable();
            $table->string('img_avatar');
            $table->string('img_card');
            $table->string('url');
            $table->string('market_value')->nullable();
            $table->string('stronger_foot')->nullable();
            $table->string('height')->nullable();
            $table->string('weight')->nullable();
            $table->string('face')->nullable();
            $table->string('my_club')->nullable();
            $table->string('type')->nullable();
            $table->foreignId('nation_id')->nullable()->references('id')
                ->on('nations')
                ->onDelete('cascade');
            $table->foreignId('team_id')->nullable()->references('id')
                ->on('teams')
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
        Schema::dropIfExists('players');
    }
}
