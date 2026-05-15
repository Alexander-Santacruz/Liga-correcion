<?php

namespace App\Http\Controllers;

use App\Models\President;

class PresidentController extends Controller
{
    // Directorio de presidentes
    public function index()
    {
        $presidents = President::all();

        return $presidents;
    }

    // Presidentes enlazados con su club
    public function teams()
    {
        $presidents = President::with('team')->get();

        return $presidents;
    }
}
