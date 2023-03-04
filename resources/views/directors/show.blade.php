@extends('layouts.app')

@section('title', 'Movies by Director')

@include('layouts.addDirector')

@section('content')
    <h1>Movies by Director: {{$director['name']}} {{$director['last_name']}}</h1>
    @foreach($movies as $movie)
        <div class="card m-auto col-8">
            <div class="card-body">
                <p>{{$movie->title}}</p>
                <img src="{{$movie->img_url}}">
                <p>{{$movie->release_year}}</p>
                <p>Rating: {{$movie->rating}} / 10</p>
                <p>Directed by: {{$movie->director_name}} {{$movie->director_last_name}}</p>
                <p>{{$movie->description}}</p>

                <form method="post" action="{{route('movies.show', $movie->url)}}">
                    <a href="{{route('movies.show', $movie->url)}}" class="btn btn-outline-primary">Read Review</a>
                </form>

                @if(Auth::check())
                <form method="post" action="{{route('watchlist.store', $movie->id)}}">
                    <a href="{{route('watchlist.store', $movie->id)}}" class="btn btn-outline-primary">Add to Watchlist</a>
                </form>
                @endif
                @include('layouts.editMovie')
            </div>
        </div>
    @endforeach

@endsection
