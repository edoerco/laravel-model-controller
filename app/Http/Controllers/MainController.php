<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class MainController extends Controller
{
    // creo la funzione per il collegamento
    public function home() {
        // SELECT * FROM movies
        $pippi = Movie::all();
        return view('home', compact('pippi'));
    }
}
