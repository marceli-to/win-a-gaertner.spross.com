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
        Schema::create('participants', function (Blueprint $table) {
          $table->id();
          $table->string('uuid');
          $table->string('selection');
          $table->string('name');
          $table->string('street');
          $table->string('zip');
          $table->string('city');
          $table->string('email');
          $table->string('phone');
          $table->timestamp('confirmed_at')->nullable();
          $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('participants');
    }
};
