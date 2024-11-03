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
        Schema::create('payment', function (Blueprint $table) {
            $table->id('payment_id');
            $table->unsignedBigInteger('installment_plan_id');
            $table->decimal('amount', 10, 2);
            $table->date('date');
            $table->time('time');
            $table->timestamps();
        
            $table->foreign('installment_plan_id')->references('installment_plan_id')->on('installment_plan');
        });        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payment');
    }
};
