<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
   public function index(){

      $courses  = Course::orderBy('id','desc')->paginate();
      
      return view('courses.index', compact('courses'));
   }

   public function create(){
      return view('courses.create');
   }


   public function store(Request $request){
      
      $request->validate([
         'name' => 'required', 
         'description' => 'required', 
         'category' => 'required'
      ]);

      $course = new Course();

      $course->name = $request->name;
      $course->description = $request->description;
      $course->category = $request->category;      

      $course->save();

      return redirect()->route('courses.show', $course);

   }

   public function show(Course $course){
      return view('courses.show', compact('course'));
   }

   public function edit(Course $course){
      return view('courses.edit', compact('course'));
   }

   public function update(Request $request, Course $course){
    
      $course->name = $request->name;
      $course->description = $request->description;
      $course->category = $request->category;

      $course->save();

      return redirect()->route('courses.show', $course);    
   }

}
