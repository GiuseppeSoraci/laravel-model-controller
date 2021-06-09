<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movies;

class MovieController extends Controller
{
    // Archivio Movies
    public function index() {

        // Get elements from db
        $movies = movies::all();

        // Return the user view
        return view('movies', compact('movies'));
    }
}
