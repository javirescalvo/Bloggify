@extends('layout')
@section('content')
    @if ($posts->count() > 0)
        @foreach($posts as $post)
            <div>
                <h3>{{$post->title}}</h3>
                <p>{{$post->description}}</p>
                <span>Created by: {{$post->user->name}}</span>
                <span>Posted {{$post->getFormatedDate()}}</span>
            </div>
        @endforeach
    @else
        <p>No posts available.</p>
    @endif
@endsection