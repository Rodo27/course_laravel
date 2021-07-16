@extends('layouts.plantilla')

@section('title', 'Course Create')

@section('content')
    <h1>Course Create</h1>

    

    <form action="{{route('courses.store')}}" method="POST">
        @csrf

        <label>
            Name:
            <br>
            <input type="text" name="name">
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
            <textarea name="description" rows="5"></textarea>
        </label>
        @error('description')
            <br>
                <small>*{{$message}}</small>
            <br>
        @enderror

        <br>
        <label>
            Categorty:
            <br>
            <input type="text" name="category">
        </label>
        @error('category')
            <br>
                <small>*{{$message}}</small>
            <br>
        @enderror
        
        <br><br>
        <button type="submit">Send Data</button>

    </form>

@endsection
