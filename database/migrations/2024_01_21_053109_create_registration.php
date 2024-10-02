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
        Schema::create('registration', function (Blueprint $table) {
            $table->id();
            $table->foreignId('schoolyears_id');
            $table->string('name_student');
            $table->string('date_of_birth');
            $table->string('gender');
            $table->string('elementary_of_origin');
            $table->string('phone_number')->unique();
            $table->string('home_address')->unique();
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('registration');
    }
};
