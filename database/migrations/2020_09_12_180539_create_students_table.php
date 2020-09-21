<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
             $table->text('address');
             $table->text('photo');
             $table->date('dob');
             $table->string('fname');
             $table->string('father_nrc');

            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('class_id');
            $table->unsignedBigInteger('subject_id')->nullable();
            $table->unsignedBigInteger('academic_id');

            $table->foreign('user_id')
                  ->references('id')->on('users')
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
        Schema::dropIfExists('students');
    }
}
