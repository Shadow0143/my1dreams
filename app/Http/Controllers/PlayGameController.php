<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Game;
use App\Models\PlayGame;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\Coin;
use App\Models\User;
use App\Models\Result;

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
        $coins = Coin::select('available_amount')->where('refral_code',Auth::user()->refral_code)->orderBy('id','desc')->first();
        $user = User::select('id')->where('refral_code',Auth::user()->refral_code)->first();
        if(!empty($coins)){
            $available_balance = $coins->available_amount;
        }else{
            $available_balance = 0;
        }

        $availabeAmount =  $available_balance - $request->bet_amount ;

        $coin = new Coin();
        $coin->refral_code = Auth::user()->refral_code;
        $coin->user_id = $user->id;
        $coin->used_amount = $request->bet_amount;
        $coin->available_amount = $availabeAmount;
        $coin->save();


        Alert::success('Success','Done');
        return back();
    }

    public function viewResult()
    {
        $result = Result::where('result_date',date('Y-m-d'))->groupBy('game_time')->orderBy('id','DESC')->get();
        return view('viewResult',compact('result'));
    }

}
