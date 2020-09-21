<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exams', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('exam_month');
            $table->date('exam_date');
            $table->string('start_time');
            $table->string('end_time');


              
            $table->unsignedBigInteger('subject_id');
            $table->unsignedBigInteger('grade_id');
            $table->unsignedBigInteger('academic_id');

            $table->foreign('subject_id')
                  ->references('id')->on('subjects')
                  ->onDelete('cascade'); 

            $table->foreign('grade_id')
                  ->references('id')->on('grades')
                  ->onDelete('cascade'); 

            $table->foreign('academic_id')
                  ->references('id')->on('academics')
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
        Schema::dropIfExists('exams');
    }
}
