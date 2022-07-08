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
        if (Auth::user()->user_type == 'superAdmin') {
            $numberOfMember = User::where('user_type', 'Member')->count();
        } else {
            $numberOfMember = User::where('user_type', 'Member')->where('refral_by', Auth::user()->refral_code)->count();
        }
        $coins = Coin::select('available_amount')->where('user_id', Auth::user()->id)->orderBy('id', 'DESC')->first();
        $playGame = PlayGame::select('amount')->where('user_id', Auth::user()->id)->sum('amount');
        $todayPlayGame = PlayGame::select('amount')->where('user_id', Auth::user()->id)->whereDate('created_at', date('Y-m-d'))->sum('amount');

        if (Auth::user()->user_type == 'superAdmin') {
            $todayBetNew = PlayGame::select('game_no', 'game_time', 'user_id', DB::raw('SUM(amount) as amount'))->groupBy('game_time')->groupBy('game_no')->whereDate('created_at', date('Y-m-d'))->orderBy('game_time', 'ASC')->get();
        } elseif (Auth::user()->user_type == 'Master') {
            $master_member = User::select('refral_code')->where('refral_by', Auth::user()->refral_code)->pluck('refral_code');
            $todayBetNew = PlayGame::select('game_no', 'user_id', 'game_time', DB::raw('SUM(amount) as amount'))->groupBy('game_time')->groupBy('game_no')->whereDate('created_at', date('Y-m-d'))->where('user_id', Auth::user()->id)->whereIn('refral_code', $master_member)->orderBy('game_time', 'ASC')->get();
        } else {
            $todayBetNew = PlayGame::select('game_no', 'user_id', 'game_time', DB::raw('SUM(amount) as amount'))->groupBy('game_time')->groupBy('game_no')->whereDate('created_at', date('Y-m-d'))->where('user_id', Auth::user()->id)->orderBy('game_time', 'ASC')->get();
        }

        $todayBet2 = array();
        for ($i = 0; $i < 10; $i++) {
            array_push($todayBet2, array('game_no' => $i, 'game_time' => 0, 'amount' => 0));
        }
        $inArrayData = array();
        $todayBet1 = array();
        $todayBetTimeArray = array('1pm', '4pm', '8pm');

        foreach ($todayBetTimeArray as $bk => $bv) {
            if (!in_array($bv, $inArrayData)) {
                array_push($inArrayData, $bv);
                array_push($todayBet1, array('item' => $bv, 'details' => $todayBet2));
            }
        }
        foreach ($todayBet1 as $bk1 => $bv1) {
            foreach ($todayBetNew as $bk2 => $bv2) {
                if ($bv1['item'] == $bv2->game_time) {
                    $todayBet1[$bk1]['details'][$bv2->game_no]['game_no'] = $bv2->game_no;
                    $todayBet1[$bk1]['details'][$bv2->game_no]['game_time'] = $bv2->game_time;
                    $todayBet1[$bk1]['details'][$bv2->game_no]['amount'] = $bv2->amount;
                }
            }
        }
        // dd($inArrayData,$todayBet2);
        $todayBet = (object) $todayBet1;
        return view('home', compact('numberOfMaster', 'numberOfMember', 'coins', 'playGame', 'todayBet', 'todayPlayGame'));
    }

    public function toolTip(Request $request)
    {
        $data = PlayGame::select('amount', 'name')->leftjoin('users', 'users.id', '=', 'play_games.user_id')->where('game_no', $request->no)->where('game_time', $request->time)->whereDate('play_games.created_at', date('Y-m-d'))->get();
        $table = '<table class="table table-striped"
        ><tr><th>User Name</th><th>Amount</th></tr>';
        if (count($data)>0) {
            foreach ($data as $val) {
                $table .= '<tr>
                <td>' . $val->name . '</td>
                <td>' . $val->amount . '</td>
                </tr>';
            }
        } else {
            $table .= '<tr>
            <td class="text-center" colspan="2"> No Contribution</td>
            </tr>';
        }


        $table .= '</table>';

        return $table;
    }
}
