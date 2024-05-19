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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('age');
            $table->string('gender');
            $table->timestamps();
        });
        
        // Schema::create('contacts', function (Blueprint $table) {
        //     $table->id();
        //     $table->string('email')->unique();
        //     $table->string('phone');
        //     $table->string('address');
        //     $table->string('city');
        //     $table->foreignId('stud_id')->references('id')->on('students')->onDelete('cascade');
        //     $table->timestamps();
        // });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};