<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Coin;
use App\Models\PlayGame;
use App\Models\Game;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $numberOfMaster = User::where('user_type','Master')->count();
        $numberOfMember = User::where('user_type','Member')->count();
        $coins = Coin::select('available_amount')->where('user_id',Auth::user()->id)->orderBy('id','DESC')->first();
        $playGame = PlayGame::select('amount')->where('user_id',Auth::user()->id)->sum('amount');
        // $todayBet = PlayGame::select('game_no','game_time','user_id',DB::raw('SUM(amount) as amount'))->groupBy('game_time')->groupBy('game_no')->whereDate('created_at',date('Y-m-d'))->orderBy('game_no','ASC')->get();
        $todayBet = PlayGame::select('game_no','user_id','game_time',DB::raw('SUM(amount) as amount'))->groupBy('game_time')->groupBy('game_no')->whereDate('created_at','2022-07-04')->orderBy('game_no','ASC')->get();
        return view('home',compact('numberOfMaster','numberOfMember','coins','playGame','todayBet'));
    }
}
