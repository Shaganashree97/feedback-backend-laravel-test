<?php

// In create_students_table.php migration

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('student_rollno')->unique();
            $table->string('student_name');
            $table->string('password');
            $table->string('student_mail_id')->unique();
            $table->unsignedBigInteger('course_faculty_name1_id');
            $table->unsignedBigInteger('course_faculty_name2_id');
            $table->unsignedBigInteger('course_faculty_name3_id');
            $table->unsignedBigInteger('course_faculty_name4_id');
            $table->unsignedBigInteger('course_faculty_name5_id');
            $table->timestamps();

            // Foreign keys
            $table->foreign('course_faculty_name1_id')->references('id')->on('faculty');
            $table->foreign('course_faculty_name2_id')->references('id')->on('faculty');
            $table->foreign('course_faculty_name3_id')->references('id')->on('faculty');
            $table->foreign('course_faculty_name4_id')->references('id')->on('faculty');
            $table->foreign('course_faculty_name5_id')->references('id')->on('faculty');
        });
    }

    public function down()
    {
        Schema::dropIfExists('students');
    }
}
