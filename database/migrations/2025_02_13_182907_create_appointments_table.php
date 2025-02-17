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
            $table->date('date');
            $table->string('title');
            $table->string('description');
            $table->foreignId('user_id');
            $table->foreignId('treatment_id');
            $table->string('notes');
            $table->timestamps();
        });
    }
};
