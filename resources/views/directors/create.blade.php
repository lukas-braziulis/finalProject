@extends('layouts.app')

@section('title', 'Add Director')

@section('content')
    <div class="bg-white add-form">
        <form method="post" action="{{route('directors.store')}}">
            @csrf
            <div class="form-group">
                <label for="title">Name</label>
                <input type="text" name="name" class="form-control" placeholder="Name">
            </div>
            <div class="form-group">
                <label for="title">Last name</label>
                <input type="text" name="last_name" class="form-control" placeholder="Last Name">
            </div><div class="form-group">
                <label for="title">Profile Image</label>
                <input type="text" name="img_url" class="form-control" placeholder="URL Link">
            </div>


            <button type="submit" class="btn btn-outline-primary" > Add</button>
        </form>
    </div>
@endsection
