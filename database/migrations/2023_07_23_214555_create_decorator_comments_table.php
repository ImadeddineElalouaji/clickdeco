<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDecoratorCommentsTable extends Migration
{
    public function up()
    {
        Schema::create('decorator_comments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('decorator_id');
            $table->string('name');
            $table->string('email');
            $table->integer('rating');
            $table->text('comment');
            $table->timestamps();

            $table->foreign('decorator_id')->references('id')->on('decorators')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('decorator_comments');
    }
}
