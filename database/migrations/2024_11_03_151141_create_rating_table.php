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
        Schema::create('rating', function (Blueprint $table) {
            $table->id('rating_id');
            $table->unsignedBigInteger('professional_id');
            $table->unsignedBigInteger('work_id');
            $table->unsignedBigInteger('user_id');
            $table->enum('rate', ['1', '2', '3', '4', '5']);
            $table->text('comment')->nullable();
            $table->timestamps();
        
            $table->foreign('professional_id')->references('professional_id')->on('professionals');
            $table->foreign('work_id')->references('work_id')->on('work');
            $table->foreign('user_id')->references('user_id')->on('users');
        });        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rating');
    }
};
