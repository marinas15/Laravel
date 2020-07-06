@extends('layouts.app')

@section('content')
    <a href="/posts" class="btn btn-outline-primary">Nazad</a>

    <br>
    <br>

    <h1>{{$post->title}}</h1>
    <h6>{{$post->subtitle}}</h6>
    <br>
    @if ($post->cover_image != 'noimage.jpg')
        <img style="width:70%" src="/storage/cover_images/{{$post->cover_image}}">
    @endif
    <br>
    <div>
        {!!$post->body!!}
    </div>
    <hr>
    <small>{{$post->created_at}} - {{$post->user->name}}</small>
    <hr>
    @if(!Auth::guest())
       @if(Auth::user()->id == $post->user_id)
            <a href="/posts/{{$post->id}}/edit" class="btn btn-secondary">Uredi</a>

            {!! Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'float-right']) !!}
                {{Form::hidden('_method', 'DELETE')}}
                {{Form::submit('Izbriši', ['class' => 'btn btn-danger'])}}
            {!! Form::close() !!}
        @endif
    @endif
    @endsection