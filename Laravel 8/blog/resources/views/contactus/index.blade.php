@extends('layouts.plantilla')

@section('title', 'Contact Us')

@section('content')
    <h1>Set a message!</h1>

    <form action="{{route('contactus.store')}}" method="POST">
        @csrf

        <label>
            Name:
            <br>
            <input type="text" name="name">
        </label>
        <br>
        @error('name')
            <p><strong>{{$message}}</strong></p>
        @enderror

        <label>
            Email:
            <br>
            <input type="text" name="email">
        </label>
        <br>
        @error('email')
            <p><strong>{{$message}}</strong></p>
        @enderror

        <label>
            Message:
            <br>
            <textarea name="message" rows="4"></textarea>
        </label>
        <br>
        @error('message')
            <p><strong>{{$message}}</strong></p>
        @enderror

        <button type="submit">Send Message</button>

    </form>

    @if (session('info'))
        <script>
            alert("{{session('info')}}");
        </script>
    @endif

@endsection
