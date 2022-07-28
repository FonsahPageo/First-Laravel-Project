@extends ('layout')

@section('title')

    Contact Page

@endsection

@section('content')

    <h1>Contact Form</h1>
    <form action="">
        <p><input type="text" name="Email" placeholder="Email"></p>
        <p><input type="password" placeholder = "Password"> </p>
        <p><input type="submit" name="Submit"> </p>
    </form>

@endsection