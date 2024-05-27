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
        Schema::create('doctors', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('d_name')->nullable();
            $table->string('speciality')->nullable();
            $table->string('description')->nullable();
            $table->string('medical_degree')->nullable();
            $table->integer('phone')->nullable();
            $table->string('image')->nullable();
            $table->string('email')->nullable();
            $table->string('room')->nullable();
            $table->string('working_days')->nullable();
            $table->string('time')->nullable();
            $table->string('message')->nullable();
            $table->string('status')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('doctors');
    }
};
