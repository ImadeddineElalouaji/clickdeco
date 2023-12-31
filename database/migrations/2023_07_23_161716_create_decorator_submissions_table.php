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
    Schema::create('decorator_submissions', function (Blueprint $table) {
        $table->id();
        $table->string('nom');
        $table->string('prenom');
        $table->string('email')->unique();
        $table->string('telephone')->nullable();
        $table->string('adresse')->nullable();
        $table->text('description')->nullable();
        $table->string('avatar')->nullable();
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('decorator_submissions');
    }
};
