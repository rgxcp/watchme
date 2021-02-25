<?php

namespace App\Http\Controllers;

use App\Models\Watchlist;
use Illuminate\Http\Request;

class WatchlistController extends Controller
{
    /**
     * Menampilkan view seluruh data.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $watchlists = Watchlist::all();

        return view('index', [
            'watchlists' => $watchlists
        ]);
    }

    /**
     * Menambahkan sebuah data.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Watchlist::create($request->all());

        return redirect()->route('watchlists.index');
    }

    /**
     * Menampilkan view sebuah data untuk diubah.
     *
     * @param  \App\Models\Watchlist  $watchlist
     * @return \Illuminate\Http\Response
     */
    public function edit(Watchlist $watchlist)
    {
        return view('edit', [
            'watchlist' => $watchlist
        ]);
    }

    /**
     * Mengubah sebuah data.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Watchlist  $watchlist
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Watchlist $watchlist)
    {
        $watchlist->update($request->all());

        return redirect()->route('watchlists.index');
    }

    /**
     * Menghapus sebuah data.
     *
     * @param  \App\Models\Watchlist  $watchlist
     * @return \Illuminate\Http\Response
     */
    public function destroy(Watchlist $watchlist)
    {
        $watchlist->delete();

        return redirect()->route('watchlists.index');
    }
}
