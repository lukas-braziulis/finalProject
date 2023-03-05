@extends('layouts.app')

@section('title', 'Sulky Critic')

@section('content')

    <h1 class="page-title">WELCOME to Sulky Critic</h1>
    </br>
    </br>
    @include('layouts.addMovie')
    <div class="display-grid-movie-cards">
        @foreach($movies as $movie)
            <div class="card m-auto col-8">
                <div class="card-body">
                    <img src="{{$movie->img_url}}">
                    <p class="movie-title">{{$movie->title}}</p>
                    <p class="movie-details">{{$movie->release_year}}</p>
                    <p class="movie-details">Rating: {{$movie->rating}} / 10</p>
                    <p class="movie-details">Directed by: {{$movie->director_name}} {{$movie->director_last_name}}</p>
                    <p class="movie-description">{{$movie->description}}</p>

                    <div class="buttons-alignment ">
                        <a href="{{route('movies.show', $movie->id)}}" class="btn btn-outline-primary">Read Review</a>

                        @if(Auth::check())
                            <form method="post" action="{{route('watchlist.store', $movie->id)}}">
                                <a href="{{route('watchlist.store', $movie->id)}}" class="btn btn-outline-primary">Add to Watchlist</a>
                            </form>
                        @endif
                    </div>
                    @include('layouts.editMovie')
                </div>
            </div>
        @endforeach
    </div>

@endsection
