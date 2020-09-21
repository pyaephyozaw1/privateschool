a<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->text('total_amount');
            $table->text('first_installation_date');
            $table->text('first_installation_payment');
            $table->text('second_installation_date')->nullable();
            $table->text('second_installation_payment')->nullable();
            $table->text('third_installation_date')->nullable();
            $table->text('third_installation_payment')->nullable();
            $table->unsignedBigInteger('student_id');
            $table->unsignedBigInteger('class_id');
            $table->unsignedBigInteger('grade_id');
            $table->unsignedBigInteger('academic_id');
            $table->foreign('student_id')
                  ->references('id')->on('students')
                  ->onDelete('cascade'); 
            $table->foreign('class_id')
                  ->references('id')->on('classes')
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
        Schema::dropIfExists('payments');
    }
}
