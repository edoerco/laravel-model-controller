<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// importo il database movies
use App\Movie;

// creo la classe dei controlli tramite "php artisan make:controller NomeDelControllo"
class MainController extends Controller
{
    // creo la funzione per il collegamento
    public function home() {
        // SELECT * FROM movies
        $pippi = Movie::all();
        return view('home', compact('pippi'));
    }
}
