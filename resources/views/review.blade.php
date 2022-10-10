@extends('layout')
@section('title')
    Reviews
@endsection
@section('main_content')
    <h1> Reviews</h1>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form method="post" action="/review/check">
        @csrf
        <input type="email" name="email" id="email" placeholder="Enter email" class="form-control"><br>
        <input type="text" name="subject" id="subject" placeholder="Enter review" class="form-control"><br>
        <textarea name="message" id="message" placeholder="Enter your message" class="form-control"></textarea><br>
        <button type="submit" class="btn btn-success">OK</button>
    </form>
    @if ($reviews)
        <h1></h1>
        @foreach ($reviews as $el)
            <div class="alert alert-warning">
                <h3>{{ $el->subject }}</h3>
                <b>{{ $el->message }}</b>
                <p>{{ $el->email }}</p>
            </div>
        @endforeach
    @endif

@endsection
