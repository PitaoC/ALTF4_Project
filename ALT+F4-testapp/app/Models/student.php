<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    public function studentcourse(){
        return $this->belongsTo(StudentCourse::class);
    }
}