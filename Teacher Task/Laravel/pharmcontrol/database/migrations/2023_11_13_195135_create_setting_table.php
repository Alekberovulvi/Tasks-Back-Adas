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
        Schema::create('setting', function (Blueprint $table) {
            $table->id();
            $table->string('logo');
            $table->string('home_bg');
            $table->integer('phone');
            $table->string('instagram');
            $table->string('linkedin');
            $table->string('facebook');
            $table->integer('query_content');
            $table->integer('answer_percent');
            $table->integer('user_count');
            $table->string('location');
            $table->string('email');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('setting');
    }
};
