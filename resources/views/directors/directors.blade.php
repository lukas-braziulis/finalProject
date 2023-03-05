@extends('layouts.app')

@section('title', 'Movies by Directors')

@section('content')
    <h1 class="page-title">Movies by Director</h1>
@include('layouts.addDirector')
    <div class="display-grid-movie-cards">
    @foreach($directors as $director)
        <div class="card m-auto col-8">
            <div class="card-body">
                <img src="{{$director->img_url}}">
                <h2 class="card-title">{{$director->name}} {{$director->last_name}}</h2>
                <a href="{{route('directors.show', $director->id)}}" class="btn btn-outline-primary">See Movies</a>
                @include('layouts.editDirector')
            </div>
        </div>
    @endforeach
    </div>
@endsection
