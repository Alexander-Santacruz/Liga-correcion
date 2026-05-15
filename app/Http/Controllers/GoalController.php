<?php

namespace App\Http\Controllers;

use App\Models\Goal;

class GoalController extends Controller
{
    // Todas las anotaciones registradas
    public function index()
    {
        $goals = Goal::all();

        return $goals;
    }

    // Goles junto con el jugador que anoto
    public function players()
    {
        $goals = Goal::with('player')->get();

        return $goals;
    }

    // Goles asociados a cada partido
    public function games()
    {
        $goals = Goal::with('game')->get();

        return $goals;
    }
}
