<?php

namespace App\Http\Controllers;

use App\Models\Team;

class TeamController extends Controller
{
    // Lista general de clubes
    public function index()
    {
        $teams = Team::all();

        return $teams;
    }

    // Clubes con su presidente relacionado
    public function presidents()
    {
        $teams = Team::with('president')->get();

        return $teams;
    }

    // Clubes con plantilla completa
    public function players()
    {
        $teams = Team::with('players')->get();

        return $teams;
    }

    // Clubes con historial de encuentros
    public function games()
    {
        $teams = Team::with('games')->get();

        return $teams;
    }
}
