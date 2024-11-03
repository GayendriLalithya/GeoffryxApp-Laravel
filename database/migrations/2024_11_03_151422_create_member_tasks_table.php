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
        Schema::create('member_tasks', function (Blueprint $table) {
            $table->id('member_task_id');
            $table->string('name');
            $table->text('description');
            $table->enum('status', ['not started', 'in progress', 'done']);
            $table->unsignedBigInteger('team_member_id');
            $table->timestamps();
        
            $table->foreign('team_member_id')->references('team_member_id')->on('team_members');
        });        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('member_tasks');
    }
};
