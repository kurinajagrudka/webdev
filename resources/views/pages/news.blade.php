@extends('layouts.app')

@section('content')
    <h1>News</h1>
    <p>Read some newest news from world of music</p>
    @if(count($post)>0)
        @foreach ($post as $onePost)
            <div class="well">
                <h3><a href="/news/{{$onePost->id}}">{{$onePost->title}}</a></h3>
                 <p>{{$onePost->slug}}</p>
                <small>Written on {{$onePost->created_at}}</small>
            </div>
        @endforeach
        {{$post->links()}}
    @else
        <P>Sorry, no posts found!:(</p>
    @endif

@endsection

