<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Faculty extends Model
{
    protected $fillable = ['faculty_name', 'faculty_mail_id', 'password', 'course_handling_id', 'slot_number'];

    public function coursesHandling()
    {
        return $this->belongsTo(Course::class, 'course_handling_id');
    }

    public function students()
    {
        return $this->hasMany(Student::class, 'course_faculty_name1_id')
            ->orWhere('course_faculty_name2_id', $this->id)
            ->orWhere('course_faculty_name3_id', $this->id)
            ->orWhere('course_faculty_name4_id', $this->id)
            ->orWhere('course_faculty_name5_id', $this->id);
    }

    public function feedbacks()
    {
        return $this->hasMany(Feedback::class, 'course_faculty_id');
    }
}
