<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index(){
        //Get the db from Model
        $movies = Movie::all();
        return view("movies.index", compact("movies"));
    }

    public function show(string $id){
        $movie = Movie::find($id);
        return view("movies.show-movie", compact("movie"));
    }
}
