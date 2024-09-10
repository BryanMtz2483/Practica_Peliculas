<?php

use App\Http\Controllers\PeliculaController;
use Illuminate\Support\Facades\Route;

Route::get('/index-movies', [PeliculaController ::class, 'index']) -> name('movies.index');

Route::get('/show-movies/{movie}', [PeliculaController ::class, 'show']) -> name('movies.show');

Route::get('/index-create', [PeliculaController ::class, 'create']) -> name('movies.create');

Route::post('/movies-store', [PeliculaController ::class, 'store']) -> name('movies.store');

Route::get('/movies-update/{movie}', [PeliculaController ::class, 'update']) -> name('movies.update');

Route::put('/movies-update/{movie}', [PeliculaController ::class, 'change']) -> name('movies.change');

Route::delete('/movies-delete/{movie}', [PeliculaController ::class, 'delete']) -> name('movies.delete');

Route::get('/movies-report/{movie}', [PeliculaController ::class, 'report']) -> name('movies.report');


