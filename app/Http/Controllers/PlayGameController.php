<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Game;

class PlayGameController extends Controller
{
    public function playGame()
    {
        $game = Game::all();
        return view('playgame',compact('game'));
        
    }
}
