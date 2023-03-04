<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\watchlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WatchlistController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard', ['watchlists' => Auth::user()->movies]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(int $movieId)
    {
        // GAL IDETI AUTH::USER() APSAUGA ??

        $watchlist = new Watchlist();
        $watchlist->user_id = Auth::user()->id;
        $watchlist->movie_id = $movieId;
        $watchlist->save();

        return redirect()->intended('/dashboard');

    }

    /**
     * Display the specified resource.
     */
    public function show(watchlist $watchlist)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(watchlist $watchlist)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, watchlist $watchlist)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $movieId)
    {
        // GAL IDETI AUTH::USER() APSAUGA ??

        $userId = Auth::user()->id;
        $watchlist = Watchlist::query()
            ->where('movie_id', $movieId)
            ->where('user_id', $userId)
            ->get()->toArray()[0];

        $forDelete = $watchlist['id'];

        Watchlist::findOrFail($forDelete)->delete();

        return redirect()->intended('/dashboard');
    }
}
