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
        Schema::create('referrals', function (Blueprint $table) {
            $table->id('referral_id');
            $table->unsignedBigInteger('work_id');
            $table->unsignedBigInteger('professional_id');
            $table->unsignedBigInteger('reference_id');
            $table->enum('status', ['accepted', 'rejected', 'pending']);
            $table->timestamps();
        
            $table->foreign('work_id')->references('work_id')->on('work');
            $table->foreign('professional_id')->references('professional_id')->on('professionals');
            $table->foreign('reference_id')->references('reference_id')->on('reference');
        });        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('referrals');
    }
};
