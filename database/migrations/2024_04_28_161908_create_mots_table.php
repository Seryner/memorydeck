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
        Schema::create('mots', function (Blueprint $table) {
            $table->id();
            $table->string('nom_fr');
            $table->string('nom_en');
            $table->unsignedBigInteger('paquets_id');
            $table->foreign('paquets_id')->references('id')->on('paquets');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mots');
    }
};
