<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Alert;
use App\Models\User;

class MasterController extends Controller
{

    public function master()
    {
        $masterList = User::select('id','name','refral_code','status','is_block','Phone_number','address')->get();
        return view('masters.master',compact('masterList'));
    }
    public function addMasterForm()
    {
        return view('masters.addMasterForm');
    }
}
