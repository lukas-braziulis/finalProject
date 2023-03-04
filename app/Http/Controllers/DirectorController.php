<?php

namespace App\Http\Controllers;

use App\Models\Director;
use App\Models\Movie;
use Illuminate\Http\Request;

class DirectorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('directors.directors', ['directors' => Director::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        dump("hi from Directors CREATE");
        die;

        return view('directors.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        dd("hi from Directors Store");
    }

    /**
     * Display the specified resource.
     */
    public function show(int $directorId)
    {
        $director = Director::query()->where('id', '=', $directorId)->get()->toArray()[0];
        $movieQuery = Movie::query()->where('director_id', '=', $directorId)->get();

        return view('directors.show', [
            'director' => $director,
            'movies' => $movieQuery
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Director $director)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Director $director)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Director $director)
    {
        //
    }
}
