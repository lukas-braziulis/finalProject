<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('welcome', ['movies' => Movie::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('movies.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $movie = new Movie();
        $movie->title = $request->title;
        $movie->director_name = $request->director_name;
        $movie->director_last_name = $request->director_last_name;
        $movie->release_year = $request->release_year;
        $movie->release_decade = $request->release_decade;
        $movie->description = $request->description;
        $movie->url = $request->url;
        $movie->img_url = $request->img_url;


        $movie->save();

        return view('welcome', ['movies' => Movie::all()]);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $url = Movie::find($id)->url;

        $urlLinkBuilder = 'movies.'.$url;
        return view($urlLinkBuilder);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        return view('movies.edit', [
            'movie' => Movie::findOrFail($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $movie = Movie::findOrFail($id);

        $movie->title = $request->title;
        $movie->director_name = $request->director_name;
        $movie->director_last_name = $request->director_last_name;
        $movie->release_year = $request->release_year;
        $movie->release_decade = $request->release_decade;
        $movie->description = $request->description;
        $movie->url = $request->url;

        $movie->director_id = $request->director_id;
        $movie->img_url = $request->img_url;
        $movie->rating = $request->rating;

        $movie->save();

        return view('welcome', ['movies' => Movie::all()]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        Movie::destroy($id);

        return view('welcome', ['movies' => Movie::all()]);
    }
}
