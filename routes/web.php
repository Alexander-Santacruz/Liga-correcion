<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\TeamController;
use App\Http\Controllers\PlayerController;
use App\Http\Controllers\GameController;
use App\Http\Controllers\GoalController;
use App\Http\Controllers\PresidentController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::view('/', 'welcome');

Route::get('/teams', [TeamController::class, 'index']);
Route::get('/teams-presidents', [TeamController::class, 'presidents']);
Route::get('/teams-players', [TeamController::class, 'players']);
Route::get('/teams-games', [TeamController::class, 'games']);



Route::get('/players', [PlayerController::class, 'index']);
Route::get('/players-teams', [PlayerController::class, 'teams']);
Route::get('/players-goals', [PlayerController::class, 'goals']);



Route::get('/games', [GameController::class, 'index']);
Route::get('/games-teams', [GameController::class, 'teams']);
Route::get('/games-goals', [GameController::class, 'goals']);



Route::get('/goals', [GoalController::class, 'index']);
Route::get('/goals-players', [GoalController::class, 'players']);
Route::get('/goals-games', [GoalController::class, 'games']);



Route::get('/presidents', [PresidentController::class, 'index']);
Route::get('/presidents-teams', [PresidentController::class, 'teams']);
