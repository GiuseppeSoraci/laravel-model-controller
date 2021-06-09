<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    // Homepage
    public function index()
    {
        $elements = ['Movies', 'Tv Series', 'Documentaries', 'TV Programs'];
        $productions = ['Universal Pictures', 'Warner Bros.', 'Columbia Pictures', 'Walt Disney Pictures', 'DreamWorks Pictures'];
        return view('home', compact('elements', 'productions'));
    }

    // Contacts
    public function contacts()
    {
        return view('contacts');
    }
}
