<?php

namespace App\Http\Controllers;

use App\Models\Player;

class PlayerController extends Controller
{
    // Registro general de futbolistas
    public function index()
    {
        $players = Player::all();

        return $players;
    }

    // Futbolistas con su club asociado
    public function teams()
    {
        $players = Player::with('team')->get();

        return $players;
    }

    // Futbolistas con sus anotaciones
    public function goals()
    {
        $players = Player::with('goals')->get();

        return $players;
    }
}
