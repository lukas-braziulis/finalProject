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
        return view('directors.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $director = new Director();
        $director->name = $request->name;
        $director->last_name = $request->last_name;
        $director->img_url = $request->img_url;

        $director->save();

        return view('directors.directors', ['directors' => Director::all()]);
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
    public function edit($id)
    {
        return view('directors.edit', [
            'director' => Director::findOrFail($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $director = Director::findOrFail($id);

        $director->name = $request->name;
        $director->last_name = $request->last_name;
        $director->img_url = $request->img_url;

        $director->save();

        return view('directors.directors', ['directors' => Director::all()]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        Director::destroy($id);

        return view('directors.directors', ['directors' => Director::all()]);
    }
}
