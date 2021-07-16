@extends('layouts.plantilla')

@section('title', 'Course '.$course->name)

@section('content')
    <h1>Welcome to course of: {{$course->name}} </h1>
    <a href="{{route('courses.index')}}">Back to all courses</a>
    <br>
    <a href="{{route('courses.edit',$course)}}">Edit course</a>
    <p>{{$course->category}}</p>
    <p>{{$course->description}}</p>
    
@endsection
