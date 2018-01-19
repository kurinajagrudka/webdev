@extends('layouts.app')

@section('content')
    <a href="/news" class="btn btn-default">Get back</a>
    <h1>{{$post->title}}</h1>
    <div>
        {!!$post->body!!}
    </div>
    <small>Last edited at {{$post->updated_at}}</small>
    {!!Form::close()!!}
    @endsection

