<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use App\Models\Movie;
use Illuminate\Http\Request;

class VitrineController extends Controller
{

    public function index(){
        $home= Home::all();
        return view('layout.blade.php', compact('home'));
    }

    public function showmovie(Movie $movie): \never
    {
        return dd($movie);
    }
}
