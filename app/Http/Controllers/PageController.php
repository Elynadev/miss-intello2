<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class PageController extends Controller
{
    //
    public function accueil()
    {
        return Inertia::render('Accueil');
    }

    public function menu()
    {
        return Inertia::render('Menu');
    }

    public function galerie()
    {
        return Inertia::render('Galerie');
    }

    public function about()
    {
        return Inertia::render('About');
    }


    public function inscription()
    {
        return Inertia::render('Inscription');
    }

    public function evenement()
    {
        return Inertia::render('Evenement');
    }
  
}

