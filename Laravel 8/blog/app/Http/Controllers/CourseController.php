<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCourse;
use App\Models\Course;

class CourseController extends Controller
{
   public function index(){

      $courses  = Course::orderBy('id','desc')->paginate();
      
      return view('courses.index', compact('courses'));
   }

   public function create(){
      return view('courses.create');
   }


   public function store(StoreCourse $request){
      
      

     // $course = new Course();
/* 
      $course->name = $request->name;
      $course->description = $request->description;
      $course->category = $request->category;      

      $course->save();
 */

/*       $curso = Course::create([
         'name' => $request->name,
         'decription' => $request->description,
         'category' => $request->category
      ]); */

      $course = Course::create($request->all());

      return redirect()->route('courses.show', $course);

   }

   public function show(Course $course){
      return view('courses.show', compact('course'));
   }

   public function edit(Course $course){
      return view('courses.edit', compact('course'));
   }

   public function update(StoreCourse $request, Course $course){

      /* $request->validate([
         'name' => 'required', 
         'description' => 'required', 
         'category' => 'required'
      ]);
       */
    /* 
      $course->name = $request->name;
      $course->description = $request->description;
      $course->category = $request->category;

      $course->save(); */

      $course->update($request->all());

      return redirect()->route('courses.show', $course);    
   }

   public function destroy(Course $course){
      $course->delete();

      return redirect()->route('courses.index');
   }

}
