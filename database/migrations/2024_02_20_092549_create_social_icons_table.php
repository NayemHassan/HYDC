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
        Schema::create('social_icons', function (Blueprint $table) {
            $table->id();
            $table->foreignId('dr_id');
            $table->foreign('dr_id')->references('id')->on('users')->onDelete('cascade');
            $table->string("platform_name");
            $table->string("facebook")->nullable();
            $table->string("instragram")->nullable();
            $table->string("linkdin")->nullable();
            $table->string("twitter")->nullable();
            $table->string("other_link")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('social_icons');
    }
};
