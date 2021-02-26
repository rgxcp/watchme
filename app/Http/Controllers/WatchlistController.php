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
    public function store(Request $request)             // 1, 2
    {
        $request->validate([                            // 3, 4
            'film_title' => ['required']
        ]);

        Watchlist::create($request->all());             // 5

        return redirect()->route('watchlists.index');   // 6, 7
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
    public function update(Request $request, Watchlist $watchlist)  // 1, 2
    {
        $request->validate([                                        // 3, 4
            'film_title' => ['required']
        ]);

        $watchlist->update($request->all());                        // 5

        return redirect()->route('watchlists.index');               // 6, 7
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
