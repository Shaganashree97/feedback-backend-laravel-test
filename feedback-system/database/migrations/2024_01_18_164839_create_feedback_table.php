<?php

// In create_feedback_table.php migration
// In create_feedback_table.php migration

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFeedbackTable extends Migration
{
    public function up()
    {
        Schema::create('feedback', function (Blueprint $table) {
            // Remove the line below as the 'id' field is already auto-incremented and set as the primary key.
            // $table->id();

            $table->unsignedBigInteger('student_rollno_id');
            $table->string('student_name');
            $table->unsignedBigInteger('course_title_id');
            $table->unsignedBigInteger('course_faculty_id');
            $table->text('feedback');
            $table->text('feedback_response')->nullable();
            $table->timestamps();

            // Define the composite primary key
            $table->primary(['student_rollno_id', 'course_title_id', 'course_faculty_id']);

            // Foreign keys
            $table->foreign('student_rollno_id')->references('id')->on('students');
            $table->foreign('course_title_id')->references('id')->on('courses');
            $table->foreign('course_faculty_id')->references('id')->on('faculty');
        });
    }

    public function down()
    {
        Schema::dropIfExists('feedback');
    }
}
