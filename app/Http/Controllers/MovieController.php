<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class MovieController extends Controller
{
    public function movie() {
        $movies = Movie::all();
        return view('movie', compact('movies'));
    }

    public function detail($id) {
        $movie = Movie::find($id);
        return view('details', compact('movie'));
    }
}