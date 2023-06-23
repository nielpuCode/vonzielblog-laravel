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
        Schema::create('editprofiles', function (Blueprint $table) {
            $table->id();
            $table->string('profilePic')->nullable();
            $table->string('profileName');
            $table->string('profileJob');
            $table->text('profileDesc');
            $table->timestamps();
            $table->foreignId('user_id')->constrained();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('editprofiles');
    }
};

