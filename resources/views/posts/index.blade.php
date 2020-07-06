@extends('layouts.app')

@section('content')
    <h1>Postovi</h1>
    @if(count($posts) > 0)
        @foreach($posts as $post)
            <div class = "card p-3 mt-3 mb-3">
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <img style="width:50%" src="/storage/cover_images/{{$post->cover_image}}">
                    </div>
                    <div class="col-md-8 col-sm-8">
                        <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
                        <h6>{{$post->subtitle}}</h6>
                        <small>{{$post->created_at}} - {{$post->user->name}}</small>
                    </div>
                </div>
            </div>
        @endforeach
        {{$posts->links()}}
    @else
            <p>Trenutno nema postova</p>
    @endif
@endsection