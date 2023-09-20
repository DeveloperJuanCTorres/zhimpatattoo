<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function home()
    {
        $nav = 'Inicio';
        return view('home',compact('nav'));
    }

    public function cotizar()
    {
        $nav = 'Cotizar';
        return view('cotizar',compact('nav'));
    }

    public function studio()
    {
        $nav = 'Studio';
        return view('studio',compact('nav'));
    }

    public function artistas()
    {
        $nav = 'Artistas';
        return view('artistas',compact('nav'));
    }
}
