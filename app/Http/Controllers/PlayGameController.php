<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Game;
use App\Models\PlayGame;
use RealRashid\SweetAlert\Facades\Alert;

class PlayGameController extends Controller
{
    public function playGame()
    {
        $game = Game::all();
        $play_game = PlayGame::where('user_id',Auth::user()->id)->whereDate('created_at',date('Y-m-d'))->orderBy('id','desc')->get();
        return view('playgame',compact('game','play_game'));
    }

    public function addAmount(Request $request)
    {
        $playGame = New PlayGame();
        $playGame->game_no = $request->game_no;
        $playGame->game_time = $request->time;
        $playGame->refral_code = Auth::user()->refral_code;
        $playGame->amount = $request->bet_amount;
        $playGame->user_id = Auth::user()->id;
        $playGame->status = '1';
        $playGame->save();
        Alert::success('Success','Done');
        return back();
    }

}
