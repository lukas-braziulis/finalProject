@extends('layouts.app')

@section('content')
<div>
    @foreach($watchlists as $watchlist)
        <form method="get" action="{{route('watchlist.delete', $watchlist->id)}}">

            <p>
               Movie: {{$watchlist->title}} ||
               Release Year: {{$watchlist->release_year}} ||
               Director: {{$watchlist->director_name}} {{$watchlist->director_last_name}}
               watchlist_id: {{$watchlist->id}}
           </p>
        <button class="btn btn-primary" type="submit" value="{{$watchlist->id}}">Delete</button>
       </form>
    @endforeach
</div>
@endsection
