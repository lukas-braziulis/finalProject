@extends('layouts.app')

@section('title', 'Add Director')

@section('content')
    <div class="bg-white">
        <form method="post" action="{{route('directors.store')}}">
            @csrf
            <div class="form-group">
                <label for="title">Question Title</label>
                <input type="text" name="title" class="form-control" id="questionTitle" placeholder="Question">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Description</label>
                <textarea name="description" class="form-control" placeholder="Description"></textarea>
            </div>

            <button type="submit" class="btn btn-outline-primary"  >Create</button>
        </form>
    </div>
@endsection
