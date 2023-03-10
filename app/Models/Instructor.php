<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Instructor extends Model
{
    use HasFactory;

    public function Instructor(){
        return $this->hasMany(Course::class,'instructor_id', 'id');
    }
}
