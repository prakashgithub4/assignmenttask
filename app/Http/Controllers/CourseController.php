<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\CourseDetails;

class CourseController extends Controller
{
    public function index(){
        $courses = Course::all();

        return view('courses',compact('courses'));
    }
    public function save(Request $request){
        $files = [];
       //echo"<pre>";print_r($request->content); exit;
        if($request->hasfile('image'))
         {
            foreach($request->file('image') as $file)
            {
                $name = time().rand(1,50).'.'.$file->extension();
                $file->move(public_path('course_images'), $name);
                $files[] = $name;
            }
         }

       $Course  = Course::create(['course_name'=>$request->course_name,'image'=>json_encode($files)]);
       foreach($request->content as $content){
        CourseDetails::create(['course_id'=>$Course->id,'content'=>$content]);
       }

    }
    public function addCourses(){
     return view('add');
    }
    public function EditCourses(){

    }
}
