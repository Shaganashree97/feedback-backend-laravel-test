<?php

// app/Models/Student.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = ['student_rollno', 'student_name', 'password', 'student_mail_id', 'course_faculty_name1_id', 'course_faculty_name2_id', 'course_faculty_name3_id', 'course_faculty_name4_id', 'course_faculty_name5_id'];

    public function facultyName1()
    {
        return $this->belongsTo(Faculty::class, 'course_faculty_name1_id');
    }

    public function facultyName2()
    {
        return $this->belongsTo(Faculty::class, 'course_faculty_name2_id');
    }

    public function facultyName3()
    {
        return $this->belongsTo(Faculty::class, 'course_faculty_name3_id');
    }

    public function facultyName4()
    {
        return $this->belongsTo(Faculty::class, 'course_faculty_name4_id');
    }

    public function facultyName5()
    {
        return $this->belongsTo(Faculty::class, 'course_faculty_name5_id');
    }
}
