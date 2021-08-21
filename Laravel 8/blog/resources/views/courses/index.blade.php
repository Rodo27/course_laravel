@extends('layouts.plantilla')

@section('title', 'Courses')

@section('content')
    <h1>Welcome main courses page</h1>
    <a href="{{route('courses.create')}}">Create Course</a>
    <ul>
        @foreach ($courses as $course)
            <li>
                <a href="{{route('courses.show',$course)}}">{{$course->name}}</a>
            </li>
        @endforeach
    </ul>
    {{$courses->links()}}
@endsection
