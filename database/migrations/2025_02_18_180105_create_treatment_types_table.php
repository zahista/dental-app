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
        Schema::create('treatment_types', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('description')->nullable();
            $table->unsignedBigInteger('price')->default(1000);
            $table->unsignedBigInteger('minutes')->default(30);
            $table->boolean('is_paid')->default(true);
            $table->string('status')->default('active');
            $table->timestamps();
        });
    }

};
