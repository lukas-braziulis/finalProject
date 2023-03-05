@extends('layouts.app')

@section('title', 'Add a Movie')

@section('content')
    <div class="bg-white add-form">
        <form method="post" action="{{route('movies.store')}}">
            @csrf
            <div class="form-group">
                <label for="title">Movie Title</label>
                <input type="text" name="title" class="form-control"  placeholder="Title">
            </div>
            <div class="form-group">
                <label for="title">Director</label>
                <input type="text" name="director_name" class="form-control"  placeholder="Name">
                <input type="text" name="director_last_name" class="form-control"  placeholder="Last name">
            </div>
            <div class="form-group">
                <label for="title">Release Year</label>
                <input type="number" name="release_year" class="form-control" placeholder="Release Year">
            </div>
            <div class="form-group">
                <label for="title">Release Decade</label>
                <input type="text" name="release_decade" class="form-control"  placeholder="Release Decade">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Description</label>
                <textarea name="description" class="form-control" placeholder="Description"></textarea>
            </div>
            <div class="form-group">
                <label for="title">Link</label>
                <input type="text" name="url" class="form-control"  placeholder="URL link">
            </div>

            <button type="submit" class="btn btn-outline-primary"  >Add</button>
        </form>
    </div>
@endsection
