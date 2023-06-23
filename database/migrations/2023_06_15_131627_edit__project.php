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
        Schema::create('editprojects', function (Blueprint $table) {
            $table->id();
            $table->string('imageProject')->nullable();
            $table->string('projectTitle');
            $table->string('projectLink');
            $table->text('projectDesc');
            $table->timestamps();
            $table->foreignId('user_id')->constrained();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('editprojects');
    }
};

