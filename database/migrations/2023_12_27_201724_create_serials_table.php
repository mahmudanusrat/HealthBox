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
        Schema::create('serials', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('appointment_id')->nullable();
            $table->foreign('appointment_id')->references('id')->on('appointments');
            $table->integer('doctor_id')->nullable();
            $table->integer('serial_id')->nullable();
            $table->string('status')->nullable();
            $table->string('report')->nullable();
            $table->string('medicine')->nullable();
            $table->string('aboutPatient')->nullable();
           // $table->string('waiting_id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('serials');
    }
};
