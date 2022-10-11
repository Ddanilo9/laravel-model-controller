<?php

namespace App\Http\Controllers;

use App\Movie;

class PageController extends Controller
{
    public function index() {

        $movies = Movie::all();
        // dd($movies);
        return view('show', compact('movies'));
    }
}
