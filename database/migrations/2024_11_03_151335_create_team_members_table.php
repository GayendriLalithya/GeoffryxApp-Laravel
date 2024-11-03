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
        Schema::create('team_members', function (Blueprint $table) {
            $table->id('team_member_id');
            $table->unsignedBigInteger('professional_id');
            $table->unsignedBigInteger('team_id');
            $table->timestamps();
        
            $table->foreign('professional_id')->references('professional_id')->on('professionals');
            $table->foreign('team_id')->references('team_id')->on('team');
        });        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('team_members');
    }
};
