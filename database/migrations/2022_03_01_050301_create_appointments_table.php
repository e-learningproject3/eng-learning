<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppointmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appointments', function (Blueprint $table) {
            $table->id();
            $table -> string('name') -> nullable();
            $table -> string('email') -> nullable();
            $table -> string('phone') -> nullable();
            $table -> unsignedBigInteger('teacher') -> nullable();
            $table -> foreign('teacher')->references('id')->on('teachers')->onDelete('cascade');
            $table -> string('date') -> nullable();
            $table -> string('message') -> nullable();
            $table -> string('status') -> nullable();
            $table -> unsignedBigInteger('user_id') -> nullable();
            $table -> foreign('user_id')->references('id')->on('users')->onDelete('cascade');

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
        Schema::dropIfExists('appointments');
    }
}
