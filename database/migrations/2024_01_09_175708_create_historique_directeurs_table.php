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
        Schema::create('historique_directeurs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('labo_id');
            $table->unsignedBigInteger('ancien_directeur_id');
            $table->unsignedBigInteger('nouveau_directeur_id');
            $table->timestamp('date_debut')->nullable();
            $table->timestamp('date_fin')->nullable();
            $table->timestamps();

            $table->foreign('labo_id')->references('id')->on('labos')->onDelete('cascade');
            $table->foreign('ancien_directeur_id')->references('id')->on('users');
            $table->foreign('nouveau_directeur_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('historique_directeurs');
    }
};
