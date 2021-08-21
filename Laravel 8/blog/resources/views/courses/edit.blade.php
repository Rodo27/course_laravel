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
            <input type="text" name="name" value="{{old('name', $course->name)}}" >
        </label>
        @error('name')
            <br>
                <small>*{{$message}}</small>
            <br>
        @enderror
        
        <br>
        <label>
            Description:
            <br>
            <textarea name="description" rows="5">{{old('description', $course->description)}}</textarea>
        </label>
        @error('description')
            <br>
                <small>*{{$message}}</small>
            <br>
        @enderror

        <br>
        <label>
            Category:
            <br>
            <input type="text" name="category" value="{{old('category', $course->category)}}">
        </label>
        @error('category')
            <br>
                <small>*{{$message}}</small>
            <br>
        @enderror
        
        <br><br>
        <button type="submit">Update Course</button>

    </form>

@endsection
