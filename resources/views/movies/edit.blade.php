@extends('layouts.app')

@section('title', '{{$movie->title}}')

@section('content')
    <div class="bg-white add-form">
        <form method="post" action="{{route('movies.update', $movie->id)}}">
            @csrf
            @method('put')
            <div class="form-group">
                <label for="title">Movie Title</label>
                <input type="text" name="title" class="form-control" value="{{$movie->title}}">
            </div>
            <div class="form-group">
                <label for="title">Director</label>
                <input type="text" name="director_name" class="form-control" value="{{$movie->director_name}}">
                <input type="text" name="director_last_name" class="form-control" value="{{$movie->director_last_name}}">
            </div>
            <div class="form-group">
                <label for="title">Release Year</label>
                <input type="number" name="release_year" class="form-control" value="{{$movie->release_year}}">
            </div>
            <div class="form-group">
                <label for="title">Release Decade</label>
                <input type="text" name="release_decade" class="form-control" value="{{$movie->release_decade}}">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Description</label>
                <textarea name="description" class="form-control" >{{$movie->description}}</textarea>
            </div>
            <div class="form-group">
                <label for="title">Link</label>
                <input type="text" name="url" class="form-control" value="{{$movie->url}}">
            </div>

            <div class="form-group">
                <label for="title">Director ID</label>
                <input type="number" name="director_id" class="form-control" value="{{$movie->director_id}}">
            </div>
            <div class="form-group">
                <label for="title">Image URL</label>
                <input type="text" name="img_url" class="form-control" value="{{$movie->img_url}}">
            </div>
            <div class="form-group">
                <label for="title">Rating</label>
                <input type="number" step="0.01" name="rating" class="form-control" value="{{$movie->rating}}">
            </div>

            <button type="submit" class="btn btn-outline-primary">Update</button>
        </form>

    </div>

@endsection
