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
        Schema::create('verify', function (Blueprint $table) {
            $table->id('verify_id');
            $table->unsignedBigInteger('professional_id');
            $table->string('nic_no');
            $table->string('nic_front');
            $table->string('nic_back');
            $table->string('certificate');
            $table->timestamps();
        
            $table->foreign('professional_id')->references('professional_id')->on('professionals');
        });        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('verify');
    }
};
