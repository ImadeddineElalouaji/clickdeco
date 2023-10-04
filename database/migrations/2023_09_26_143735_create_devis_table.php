<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('devis', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('prenom');
            $table->string('adresse');
            $table->string('telephone')->nullable();
            $table->string('email');
            $table->text('description');
            $table->string('avatar')->nullable();
            $table->string('ville');
            $table->string('style')->nullable(); // Style column
            $table->string('moderniter')->nullable(); // Moderniter column
            $table->string('projet_picture')->nullable(); // Projet Picture column
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('devis');
    }
};
