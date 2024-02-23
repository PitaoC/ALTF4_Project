<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentCourse extends Model
{
    public function courses(){
        return $this->hasMany(course::class);
    }
    public function studentcourse(){
        return $this->hasMany(student::class);
    }
    
}
