<?php

namespace App\Http\Controllers;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\Pelicula;
use Illuminate\Http\Request;

class PeliculaController extends Controller
{
    public function index (){
        $movies = Pelicula::orderBy('id','desc') -> paginate();
        return view('movies.index-movies', compact('movies'));
    }
    public function show($movie){
        $movieDetail = Pelicula::find($movie);
        return view('movies.show-movies', compact('movieDetail'));
    }
    public function create(){
        return view('movies.create-movies');
    }
    public function store (Request $request){
        $movie = new Pelicula();

        $movie ->name = $request -> name;
        $movie ->genre = $request -> genre;
        $movie ->duration = $request -> duration;
        $movie ->description = $request -> description;
        $movie ->year = $request -> year;

        $movie -> save();

        return redirect()-> route('movies.index');
    }
    public function update($movie){
        $updateMovie = Pelicula::find($movie);
        return view('movies.update-movies', compact('updateMovie'));
    }

    public function change (Request $request, $id){
        $movie = Pelicula::FindOrFail($id);

        $movie ->name = $request -> name;
        $movie ->genre = $request -> genre;
        $movie ->duration = $request -> duration;
        $movie ->description = $request -> description;
        $movie ->year = $request -> year;

        $movie -> save();

        return redirect()-> route('movies.show', $movie);
    }
    public function delete($movie){
        $deleteMovie = Pelicula::find($movie);
        $deleteMovie -> delete();
        return redirect()-> route('movies.index');
    }
    public function report($movie){
        $movies = Pelicula::find($movie);
        $pdf = Pdf::loadView('movies.report-movies', compact('movies'));
        return $pdf->stream('movies-report.pdf');
    }
}
