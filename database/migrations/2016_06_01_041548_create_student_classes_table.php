<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentClassesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_classes', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('discipline_class_id');
            $table->unsignedInteger('student_id');
            $table->timestamps();

            $table->foreign('discipline_class_id')->references('id')->on('discipline_classes');
            $table->foreign('student_id')->references('id')->on('students');

            $table->unique(['discipline_class_id', 'student_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('student_classes');
    }
}
