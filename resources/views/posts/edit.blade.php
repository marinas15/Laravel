@extends('layouts.app')

@section('content')
    <h1>Uredi post</h1>
    {!! Form::open(['action' => ['PostsController@update', $post->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('title', 'Naslov*')}}
            {{Form::text('title', $post->title, ['class' => 'form-control', 'placeholder' => 'Naslov'])}}
        </div>
        <div class="form-group">
            {{Form::label('subtitle', 'Kolegij*')}}
            {{Form::text('subtitle', $post->subtitle, ['class' => 'form-control', 'placeholder' => 'Upiši kolegij'])}}
        </div>
        <div class="form-group">
            {{Form::label('body', 'Opis*')}}
            {{Form::textarea('body', $post->body, ['id' => 'editor', 'class' => 'form-control', 'placeholder' => 'Unesi tekst'])}}   
        </div>
        <div class="form-group">
            {{Form::file('cover_image')}}
        </div>
        {{Form::hidden('_method', 'PUT')}}
        {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection