<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePreRegistrationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pre_registrations', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('course_id');
            $table->unsignedInteger('student_id');
            $table->unsignedInteger('discipline_id');
            $table->unsignedInteger('year');
            $table->unsignedInteger('half');
            $table->enum('day_of_week', ['monday', 'tuesday', 'wednesday', 'thursday', 'friday']);
            $table->enum('status', ['pending', 'completed']);
            $table->timestamps();

            $table->foreign('course_id')->references('id')->on('courses');
            $table->foreign('student_id')->references('id')->on('students');
            $table->foreign('discipline_id')->references('id')->on('disciplines');

            $table->unique(['course_id', 'student_id', 'discipline_id', 'year', 'half'], 'pre_registrations_cid_sid_did_unique');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('pre_registrations');
    }
}
