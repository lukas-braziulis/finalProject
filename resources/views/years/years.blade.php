@extends('layouts.app')

@section('title', 'Movies by Year')

@section('content')
    <h1 class="page-title">Movies by Year</h1>
    <div class="display-grid-movie-cards">
    @foreach($years as $year)
        <div class="row question-list-container">
            <div class="card m-auto col-8">
                <div class="card-body">
                    <h2 class="card-title text-center ">{{ $year->decade }}</h2>
                    <div class="text-center">
                        <a href="{{route('years.show', $year->decade)}}" class="btn btn-outline-primary">See Movies</a>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
    </div>
@endsection
