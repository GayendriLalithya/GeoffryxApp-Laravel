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
        Schema::create('work', function (Blueprint $table) {
            $table->id('work_id');
            $table->text('description');
            $table->string('name');
            $table->unsignedBigInteger('user_id');
            $table->string('location');
            $table->decimal('budget', 10, 2);
            $table->date('due_date');
            $table->timestamps();
        
            $table->foreign('user_id')->references('user_id')->on('users');
        });        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('work');
    }
};
