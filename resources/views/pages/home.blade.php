@extends('layouts.app')

@section('content')
    <div class="jumbotron text-center">
        @if (Auth::check()) 
           <h1> Welcome, {{ Auth::user()->name }}! </h1>
        @else
        <h1> Welcome! </h1>
        <p>
            <a class="btn btn-primary btn-lg" href="/login" role="button">Login</a>
            <a class="btn btn-success btn-lg" href="/register" role="button">Register</a>
        </p>
        @endif
    </div>
    <div class="homebox">
        <p class="opisanie">
            Thank you for choosing to pay attention to our page. On this page you can see various news and opinions of different people about music. For viewing news you can visit the News tab, if you want to discuss some topic with other users, then welcome to the Forum tab. To get the full functions that our page provides, we recommend that you register with it. Thank you very much for our support:)
        </p>
    </div>
@endsection
