<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = ['course_code', 'course_title', 'faculty_slot1_id', 'faculty_slot2_id'];

    public function facultySlot1()
    {
        return $this->belongsTo(Faculty::class, 'faculty_slot1_id');
    }

    public function facultySlot2()
    {
        return $this->belongsTo(Faculty::class, 'faculty_slot2_id');
    }
}
