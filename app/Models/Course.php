<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    protected $fillable = ['course_name','image'];
    public function courseDetails(){
        return $this->hasMany(CourseDetails::class,'course_id','id');
    }
}
