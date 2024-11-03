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
        Schema::create('work_history', function (Blueprint $table) {
            $table->id('work_history_id');
            $table->unsignedBigInteger('professional_id');
            $table->unsignedBigInteger('rating_id');
            $table->timestamps();
        
            $table->foreign('professional_id')->references('professional_id')->on('professionals');
            $table->foreign('rating_id')->references('rating_id')->on('rating');
        });        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('work_history');
    }
};
