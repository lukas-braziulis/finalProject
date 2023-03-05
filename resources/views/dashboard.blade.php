@extends('layouts.app')

@section('content')

    <table class="watchlist-table">
        <th>Movie Title</th>
        <th>Release Year</th>
        <th>Director</th>
        <th>Rating</th>

        @foreach($watchlists as $watchlist)
        <tr>
            <td><a href="{{route('movies.show', $watchlist->id)}}" class="color-white underline">{{$watchlist->title}}</a></td>
            <td>{{$watchlist->release_year}} </td>
            <td>{{$watchlist->director_name}} {{$watchlist->director_last_name}}</td>
            <td>{{$watchlist->rating}} / 10</td>
            <td><a href="{{route('watchlist.delete', $watchlist->id)}}" class="color-white underline">Remove</a></td>
        </tr>
        @endforeach
    </table>

@endsection
