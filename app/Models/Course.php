<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    public function courseCategory()
    {
        return $this->belongsTo(CourseCategory::class, 'course_category_id', 'id');
    }
    public function Instructor()
    {
        return $this->belongsTo(Instructor::class, 'instructor_id', 'id');
    }

}
