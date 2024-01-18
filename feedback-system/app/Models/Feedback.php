<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    protected $fillable = ['student_rollno_id', 'student_name', 'course_title_id', 'course_faculty_id', 'feedback', 'feedback_response'];

    public function student()
    {
        return $this->belongsTo(Student::class, 'student_rollno_id');
    }

    public function course()
    {
        return $this->belongsTo(Course::class, 'course_title_id');
    }

    public function faculty()
    {
        return $this->belongsTo(Faculty::class, 'course_faculty_id');
    }
}
