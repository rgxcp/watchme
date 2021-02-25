<?php

use App\Http\Controllers\WatchlistController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/**
 * Alamat website.
 *
 * GET    /watchlists
 * GET    /watchlists/{watchlist}/edit
 * POST   /watchlists
 * PUT    /watchlists/{watchlist}
 * DELETE /watchlists/{watchlist}
 */
Route::resource('watchlists', WatchlistController::class)->except(['create', 'show']);
