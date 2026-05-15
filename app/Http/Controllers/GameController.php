<?php

namespace App\Http\Controllers;

use App\Models\Game;

class GameController extends Controller
{
    // Calendario completo de encuentros
    public function index()
    {
        $games = Game::all();

        return $games;
    }

    // Encuentros con los clubes participantes
    public function teams()
    {
        $games = Game::with('teams')->get();

        return $games;
    }

    // Encuentros con detalle de goles
    public function goals()
    {
        $games = Game::with('goals')->get();

        return $games;
    }
}
