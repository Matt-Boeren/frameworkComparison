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
        Schema::create('friendships', function (Blueprint $table) {
            $table->unsignedBigInteger('user1Id');
            $table->unsignedBigInteger('user2Id');

            $table->foreign('user1Id')
                  ->references('id')->on('users');

            $table->foreign('user2Id')
                  ->references('id')->on('users');

            $table->primary(['user1Id', 'user2Id']);

            $table->boolean('user1Verified');
            $table->boolean('user2Verified');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('friendships');
    }
};
