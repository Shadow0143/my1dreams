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
        $numberOfMaster = User::where('user_type', 'Master')->count();
        $numberOfMember = User::where('user_type', 'Member')->count();
        $coins = Coin::select('available_amount')->where('user_id', Auth::user()->id)->orderBy('id', 'DESC')->first();
        $playGame = PlayGame::select('amount')->where('user_id', Auth::user()->id)->sum('amount');

        $todayBetNew = PlayGame::select('game_no', 'game_time', 'user_id', DB::raw('SUM(amount) as amount'))->groupBy('game_time')->groupBy('game_no')->whereDate('created_at','2022-07-04')->orderBy('game_time', 'ASC')->get();

        $mytodayBet = PlayGame::select('game_no', 'user_id', 'game_time', DB::raw('SUM(amount) as amount'))->groupBy('game_time')->groupBy('game_no')->whereDate('created_at', date('Y-m-d'))->where('user_id', Auth::user()->id)->orderBy('game_no', 'ASC')->get();
        $todayBet2= array();
        for ($i=0; $i < 10; $i++) { 
           array_push($todayBet2, array('game_no'=>$i, 'game_time'=>0,'amount'=>0));
        }
        $inArrayData = array();
        $todayBet1 = array();
        foreach ($todayBetNew as $bk => $bv) {
            if(!in_array($bv->game_time, $inArrayData)){
                array_push($inArrayData, $bv->game_time);
                array_push($todayBet1, array('item'=>$bv->game_time, 'details'=>$todayBet2));
            }
        }
        foreach ($todayBet1 as $bk1 => $bv1) {
            foreach ($todayBetNew as $bk2 => $bv2) {
                if($bv1['item']==$bv2->game_time){
                    $todayBet1[$bk1]['details'][$bv2->game_no]['game_no']=$bv2->game_no;
                    $todayBet1[$bk1]['details'][$bv2->game_no]['game_time']=$bv2->game_time;
                    $todayBet1[$bk1]['details'][$bv2->game_no]['amount']=$bv2->amount;
                }
            }
        }
        $todayBet = (object) $todayBet1;
        return view('home', compact('numberOfMaster', 'numberOfMember', 'coins', 'playGame', 'todayBet', 'mytodayBet'));
    }

    public function toolTip(Request $request)
    {
        $data = PlayGame::select('amount', 'name')->leftjoin('users', 'users.id', '=', 'play_games.user_id')->where('game_no', $request->no)->where('game_time', $request->time)->whereDate('play_games.created_at', date('Y-m-d'))->get();
        $table = '<table class="table table-striped"
        ><tr><th>User Name</th><th>Amount</th></tr>';
        foreach ($data as $val) {
            $table .= '<tr>
            <td>' . $val->name . '</td>
            <td>' . $val->amount . '</td>
            </tr>';
        }
        $table .= '</table>';

        return $table;
    }
}
