<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseDetails extends Model
{
    use HasFactory;
    protected $table='course_content';
    protected $fillable=['course_id','content'];
    public function courses(){
        return $this->belongsTo(Course::class,'id');
    }

}
