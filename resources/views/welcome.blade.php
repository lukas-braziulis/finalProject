@extends('layouts.app')

@section('title', 'Sulky Critic')

@section('content')

    <h1>WELCOME to Sulky Critic</h1>
    </br>
    </br>
    @include('layouts.addMovie')
    @foreach($movies as $movie)
        <div class="card m-auto col-8">
            <div class="card-body">
                <p>{{$movie->title}}</p>
                <img src="{{$movie->img_url}}">
                <p>{{$movie->release_year}}</p>
                <p>Rating: {{$movie->rating}} / 10</p>
                <p>Directed by: {{$movie->director_name}} {{$movie->director_last_name}}</p>
                <p>{{$movie->description}}</p>

                <a href="{{route('movies.show', $movie->id)}}" class="btn btn-outline-primary">Read Review</a>

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
