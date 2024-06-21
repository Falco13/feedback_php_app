@extends('layout')

@section('title') Contact @endsection
@section('main_content')

<div class="container">
    <div class="row">
        <div class="col-md-7 m-auto">
            <h1>Contact Page</h1>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form method="post" action="/contact/check">
                @csrf
                <input name="email" type="email" id="email" placeholder="Your email" class="form-control"><br>
                <input name="subject" type="text" id="subject" placeholder="Your subject" class="form-control"><br>
                <textarea name="message" id="message" placeholder="Your message" class="form-control"></textarea><br>
                <button type="submit" class="btn btn-warning">Send message</button>
            </form>
        </div>
    </div>
</div>

@endsection
