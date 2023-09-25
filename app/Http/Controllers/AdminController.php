<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artist;
use App\Models\Studio;
use App\Models\Position;
use App\Models\Project;
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
        $studio = Studio::first();
        $nav = 'Studio';
        return view('studio',compact('nav','home','studio'));
    }

    public function artistas()
    {
        $home = Home::first();
        $artistas = Artist::all();
        $nav = 'Artistas';
        return view('artistas',compact('nav','home','artistas'));
    }

    public function artistaid(Artist $artist)
    {
        $home = Home::first();
        $nav = 'Artistas';
        return view('artistaid',compact('nav','artist','home'));
    }

    public function piercing()
    {
        $home = Home::first();
        $positions = Position::all();
        $nav = 'Piercing';
        return view('piercing',compact('nav','home','positions'));
    }

    public function piercingid(Position $posicion)
    {
        $home = Home::first();
        $nav = 'Piercing';
        return view('piercingid',compact('nav','posicion','home'));
    }

    public function proyectos()
    {
        $home = Home::first();
        $proyectos = Project::all();
        $nav = 'Proyectos';
        return view('proyecto',compact('nav','home','proyectos'));
    }

    public function proyectoid(Project $project)
    {
        $home = Home::first();
        //$proyecto = Project::first();
        //dd($artist->name);
        $nav = 'Proyectos';
        return view('proyectoid',compact('nav','project','home'));
    }
}
