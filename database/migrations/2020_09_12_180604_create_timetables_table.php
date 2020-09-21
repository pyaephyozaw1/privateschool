<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTimetablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('timetables', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('day_id');
            $table->unsignedBigInteger('time_id');


            $table->unsignedBigInteger('class_id');
            $table->unsignedBigInteger('subject_id');
            $table->unsignedBigInteger('academic_id');
            $table->unsignedBigInteger('teacher_id');

            $table->foreign('day_id')
                  ->references('id')->on('days')
                  ->onDelete('cascade');
            $table->foreign('time_id')
                  ->references('id')->on('times')
                  ->onDelete('cascade');
           
            $table->foreign('class_id')
                  ->references('id')->on('classes')
                  ->onDelete('cascade');
            $table->foreign('subject_id')
                  ->references('id')->on('subjects')
                  ->onDelete('cascade'); 
            $table->foreign('academic_id')
                  ->references('id')->on('academics')
                  ->onDelete('cascade');
            $table->foreign('teacher_id')
                  ->references('id')->on('teachers')
                  ->onDelete('cascade');      

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
        Schema::dropIfExists('timetables');
    }
}
