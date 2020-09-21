<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('results', function (Blueprint $table) {
            $table->id();
            $table->string('mark');
            $table->unsignedBigInteger('student_id');
            $table->unsignedBigInteger('academic_id');
            $table->unsignedBigInteger('grade_id');
            $table->unsignedBigInteger('class_id');        
            $table->unsignedBigInteger('exam_id');
            $table->unsignedBigInteger('subject_id');
            $table->foreign('student_id')
                  ->references('id')->on('students')
                  ->onDelete('cascade'); 
            $table->foreign('academic_id')
                  ->references('id')->on('academics')
                  ->onDelete('cascade'); 
            $table->foreign('grade_id')
                  ->references('id')->on('grades')
                  ->onDelete('cascade'); 
             $table->foreign('class_id')
                  ->references('id')->on('classes')
                  ->onDelete('cascade');       
            $table->foreign('exam_id')
                  ->references('id')->on('exams')
                  ->onDelete('cascade'); 
            $table->foreign('subject_id')
                  ->references('id')->on('subjects')
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
        Schema::dropIfExists('results');
    }
}
