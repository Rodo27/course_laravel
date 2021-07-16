@extends('layouts.plantilla')

@section('title', 'Course Edit')

@section('content')
    <h1>Update Course</h1>

    <form action="{{route('courses.update', $course)}}" method="POST">
        @csrf
        @method('put')
        
        <label>
            Name:
            <br>
            <input type="text" name="name" value="{{$course->name}}" >
        </label>
        
        <br>
        <label>
            Description:
            <br>
            <textarea name="description" rows="5">{{$course->description}}</textarea>
        </label>

        <br>
        <label>
            Category:
            <br>
            <input type="text" name="category" value="{{$course->category}}">
        </label>
        
        <br><br>
        <button type="submit">Update Course</button>

    </form>

@endsection
