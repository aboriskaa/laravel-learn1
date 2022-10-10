@extends('layout')
@section('title')
    Reviews
@endsection
@section('main_content')
    <h1> Reviews</h1>
    <form method="post" action="/review/check">
        @csrf
        <input type="email" name="email" id="email" placeholder="Enter email" class="form-control"><br>
        <input type="text" name="subject" id="subject" placeholder="Enter review" class="form-control"><br>
        <textarea name="message" id="message" placeholder="Enter your message" class="form-control"></textarea><br>
        <button type="submit" class="btn btn-success">OK</button>
    </form>
@endsection
