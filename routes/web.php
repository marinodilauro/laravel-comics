<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {

    $comics = config('comics');

    return view('comics.index', compact('comics'));
})->name('comics');

Route::get('/comics/{id}', function ($id) {

    abort_unless($id >= 0 && $id < count(config('comics')), 404, 'NOT FOUND');
    $comic = config('comics')[$id];

    return view('comics.show', compact('comic'));
})->name('comic');

Route::get('/characters', function () {
    return redirect('/wip');
})->name('characters');

Route::get('/movies', function () {
    return redirect('/wip');
})->name('movies');

Route::get('/tv', function () {
    return redirect('/wip');
})->name('tv');

Route::get('/games', function () {
    return redirect('/wip');
})->name('games');

Route::get('/collectibles', function () {
    return redirect('/wip');
})->name('collectibles');

Route::get('/videos', function () {
    return redirect('/wip');
})->name('videos');

Route::get('/fans', function () {
    return redirect('/wip');
})->name('fans');

Route::get('/news', function () {
    return redirect('/wip');
})->name('news');

Route::get('/shop', function () {
    return redirect('/wip');
})->name('shop');

Route::get('/wip', function () {
    return view('wip');
})->name('wip');
