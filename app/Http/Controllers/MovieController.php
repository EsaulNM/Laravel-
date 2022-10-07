<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class MovieController extends Controller
{
    //funcion para llamar toda la informacion.
    public function all(){
        return Movie::all();
    }

    //Esta funcion regresa una sola pelicula por su id.
    public function findById($id){
        return Movie::where('id', $id)->get();
    }
    //Esta funcion registra una nueva pelicula mediante post
    public function newMovie(Request $request){
        $data = [
            'name' => $request->name,
            'title' => $request->title,
            'synopsis' => $request->synopsis,
            'year' => $request->year,
            'cover' => $request->cover,
        ]; 
        $newMovie = Movie::create($data);
        return $newMovie;
    }
    //Esta funcion actualiza mediante la petición PUT
    public function updateMovie(Request $request){
        $movie = Movie::find($request->id);
        $movie->name = $request->name;
        $movie->title = $request->title;
        $movie->synopsis = $request->synopsis;
        $movie->year = $request->year;
        $movie->cover = $request->cover;
        $movie->save();

        return $movie;
    }

    public function deleteMovie($id){
        $movie =Movie::find($id);
        $movie->delete();
        return $movie;
    }
}

