<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artist;
use App\Models\Home;

class AdminController extends Controller
{
    public function home()
    {
        $home = Home::first();
        $artistas = Artist::all();
        $nav = 'Inicio';
        return view('home',compact('nav','artistas','home'));
    }

    public function cotizar()
    {
        $nav = 'Cotizar';
        $home = Home::first();
        //dd($home);
        return view('cotizar',compact('nav','home'));
    }

    public function studio()
    {
        $home = Home::first();
        $nav = 'Studio';
        return view('studio',compact('nav','home'));
    }

    public function artistas()
    {
        $home = Home::first();
        $nav = 'Artistas';
        return view('artistas',compact('nav','home'));
    }

    public function artistaid(Artist $artist)
    {
        $home = Home::first();
        $nav = 'Artistas';
        return view('artistaid',compact('nav','artist','home'));
    }
}
