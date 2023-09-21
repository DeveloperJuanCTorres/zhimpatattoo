<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artist;

class AdminController extends Controller
{
    public function home()
    {
        $artistas = Artist::all();
        //$artes[] = json_encode($artistas->artes);
        dd($artistas);
        $nav = 'Inicio';
        return view('home',compact('nav','artistas'));
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

    public function artistaid($name)
    {
        //dd($name);
        $nav = 'Artistas';
        return view('artistaid',compact('nav','name'));
    }
}
