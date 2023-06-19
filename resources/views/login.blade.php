@extends('template.template')
@section('headtitle')
    Animation
@endsection
    
@section('title')
    <h1>Welcome to the Login Page</h1>
@endsection

@section('content')
    <h1>Log In</h1>
    @error('message')
    {{$message}}
    @enderror
    <form action="{{route('login.submit')}}" method="post">
        @csrf
        <div>
            <label for="username">Username</label>
            <input type="text" name="username" id="username">
        </div>
        <div>
            <label for="password">Password</label>
            <input type="password" name="password" id="password">
        </div>
        <div>
            <button>LogIn</button>
        </div>
    </form>
@endsection