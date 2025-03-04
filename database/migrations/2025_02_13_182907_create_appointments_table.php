<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('appointments', function (Blueprint $table) {
            $table->id();
            $table->date('start_at')->nullable();
            $table->string('title');
            $table->string('description')->nullable();
            $table->foreignId('user_id');
            $table->string('notes')->nullable();
            $table->timestamps();
        });
    }
};
