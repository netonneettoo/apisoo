<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDisciplineClassesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('discipline_classes', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('discipline_id');
            $table->unsignedInteger('teacher_id');
            $table->unsignedSmallInteger('year');
            $table->enum('half', [1, 2]);
            $table->json('rooms');
            $table->unsignedInteger('max_students');
            $table->unsignedInteger('needs_laboratory');
            $table->enum('status', ['active', 'inactive']);
            $table->timestamps();

            $table->foreign('discipline_id')->references('id')->on('disciplines');
            $table->foreign('teacher_id')->references('id')->on('teachers');

            $table->unique(['discipline_id', 'teacher_id', 'year', 'half']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('discipline_classes');
    }
}
