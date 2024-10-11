<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('usersgames', function (Blueprint $table) {
            $table->unsignedBigInteger('userId');
            $table->unsignedBigInteger('gameId');
            $table->foreign('userId')
                ->references('id')->on('users');
            $table->foreign('gameId')
                  ->references('id')->on('games');
            $table->primary(['userId', 'gameId']);
            $table->smallInteger('village');
            $table->smallInteger('city');
            $table->boolean('longestRoad');
            $table->boolean('biggestArmy');
            $table->smallInteger('victoryPoint');
            $table->boolean('verified');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usersgames');
    }
};
