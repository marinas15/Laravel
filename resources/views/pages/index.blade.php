@extends('layouts.app')

@section('content')
    <div class="jumbotron text-center">
        <h1>{{$title}}</h1>
        @guest
            <p>Prijavite se da bi objavili post!</p>
        @endguest
    </div>
@endsection