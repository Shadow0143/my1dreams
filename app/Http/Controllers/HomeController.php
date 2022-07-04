<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Coin;
use App\Models\PlayGame;

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
        return view('home',compact('numberOfMaster','numberOfMember','coins','playGame'));
    }
}
