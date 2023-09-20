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
        Schema::table('decorator_submissions', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id')->after('id')->nullable();

            // Add a foreign key constraint to link the 'user_id' column to the 'id' column in the 'users' table
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('decorator_submissions', function (Blueprint $table) {
            // Drop the foreign key constraint
            $table->dropForeign(['user_id']);

            // Drop the 'user_id' column
            $table->dropColumn('user_id');
        });
    }
};
