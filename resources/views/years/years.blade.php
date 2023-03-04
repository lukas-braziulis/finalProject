@extends('layouts.app')

@section('title', 'Movies by Year')

@section('content')
    <h1>Movies by Year</h1>

    @foreach($years as $year)
        <div class="row question-list-container">
            <div class="card m-auto col-8">
                <div class="card-body">
                    <h5 class="card-title">{{ $year->decade }}</h5>
                    <a href="{{route('years.show', $year->decade)}}" class="btn btn-outline-primary">See Movies</a>
                </div>
            </div>
        </div>
    @endforeach

@endsection
