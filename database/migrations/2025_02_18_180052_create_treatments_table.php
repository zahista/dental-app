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
        Schema::create('treatments', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('description')->nullable();
            $table->string('tooth');
            $table->foreignId('appointment_id');
            $table->foreignId('user_id');
            $table->foreignId('doctor_id');
            $table->foreignId('type_id');
            $table->timestamps();
        });
    }

};
