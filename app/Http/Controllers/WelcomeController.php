<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Result;

class WelcomeController extends Controller
{
    public function index()
    {
        $result = Result::where('result_date', date('Y-m-d'))->first();
        $result1pm = Result::where('result_date', date('Y-m-d'))->where('game_time','1:00')->first();
        $result4pm = Result::where('result_date', date('Y-m-d'))->where('game_time','4:00')->first();
        $result8pm = Result::where('result_date', date('Y-m-d'))->where('game_time','8:00')->first();
        return view('welcome',compact('result','result1pm','result4pm','result8pm'));
    }
}
