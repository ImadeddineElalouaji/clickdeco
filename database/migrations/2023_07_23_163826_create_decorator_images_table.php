<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDecoratorImagesTable extends Migration
{
    public function up()
    {
        Schema::create('decorator_images', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('decorator_submission_id');
            $table->string('path');
            $table->timestamps();

            $table->foreign('decorator_submission_id')->references('id')->on('decorator_submissions')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('decorator_images');
    }
}
