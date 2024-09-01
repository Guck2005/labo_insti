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
        Schema::create('labos', function (Blueprint $table) {
            $table->id();
            $table->string('labo_name');
            $table->unsignedBigInteger('type_labo');
            $table->foreign('type_labo')->references('id')->on('globals');
            $table->string('directeur_labo');
            $table->string('description_labo');
            $table->string('photo_labo');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('labos');
    }
};
