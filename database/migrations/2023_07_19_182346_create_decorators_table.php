<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDecoratorsTable extends Migration
{
    public function up()
    {
        Schema::create('decorators', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('speciality');
            $table->string('city');
            $table->string('photo')->nullable();
            $table->text('professional_description');
            $table->json('creations')->nullable();
             // Store image paths as JSON array
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('decorators');
    }
}
