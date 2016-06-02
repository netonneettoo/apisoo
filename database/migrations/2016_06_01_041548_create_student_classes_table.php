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
            $table->float('ap1', 3, 1)->nullable();
            $table->float('ap2', 3, 1)->nullable();
            $table->float('m', 3, 1)->nullable();
            $table->float('af', 3, 1)->nullable();
            $table->float('mf', 3, 1)->nullable();
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
