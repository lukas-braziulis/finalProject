@extends('layouts.app')

@section('title', '{{$director->name}} {{$director->last_name}}')

@section('content')
    <div class="bg-white add-form">
        <form method="post" action="{{route('directors.update', $director->id)}}">
            @csrf
            @method('put')
            <div class="form-group">
                <label for="title">Name</label>
                <input type="text" name="name" class="form-control" value="{{$director->name}}">
            </div>

            <div class="form-group">
                <label for="title">Last Name</label>
                <input type="text" name="last_name" class="form-control" value="{{$director->last_name}}">
            </div>

            <div class="form-group">
                <label for="title">Image URL</label>
                <input type="text" name="img_url" class="form-control" value="{{$director->img_url}}">
            </div>


            <button type="submit" class="btn btn-outline-primary">Update</button>
        </form>

    </div>

@endsection
