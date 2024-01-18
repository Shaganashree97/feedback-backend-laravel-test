<?php

// In create_faculty_table.php migration

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFacultyTable extends Migration
{
    public function up()
    {
        Schema::create('faculty', function (Blueprint $table) {
            $table->id();
            $table->string('faculty_name')->unique();
            $table->string('faculty_mail_id')->unique();
            $table->string('password');
            $table->unsignedBigInteger('course_handling_id');
            $table->integer('slot_number');
            $table->timestamps();

            // Foreign key
            $table->foreign('course_handling_id')->references('id')->on('courses');
        });
    }

    public function down()
    {
        Schema::dropIfExists('faculty');
    }
}
