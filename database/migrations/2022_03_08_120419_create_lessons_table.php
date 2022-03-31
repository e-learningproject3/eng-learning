<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLessonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lessons', function (Blueprint $table) {
            $table -> id();
            $table -> string('name') -> nullable();
            $table -> string('content') -> nullable();
            $table -> string('image') -> default('default.jpg') -> nullable();
            $table -> unsignedBigInteger('teacher') -> nullable();
            $table -> foreign('teacher')->references('id')->on('teachers')->onDelete('cascade');

            $table -> string('type') -> nullable();

            $table -> unsignedBigInteger('topic') -> nullable();
            $table -> foreign('topic')->references('id')->on('topics')->onDelete('cascade');

            $table -> string('level') -> nullable();
            $table -> string('file') -> nullable();
            $table -> string('video') -> nullable();


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lessons');
    }
}
