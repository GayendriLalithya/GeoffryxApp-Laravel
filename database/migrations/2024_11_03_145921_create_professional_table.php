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
        Schema::create('professionals', function (Blueprint $table) {
            $table->id('professional_id');
            $table->unsignedBigInteger('user_id');
            $table->string('payment_range');
            $table->enum('type', ['Chartered Architect', 'Structural Engineer', 'Contractor']);
            $table->enum('availability', ['Available', 'Not Available']);
            $table->string('work_location');
            $table->enum('account_status', ['pending', 'approved', 'rejected']);
            $table->timestamps();

            $table->foreign('user_id')->references('user_id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('professional');
    }
};
