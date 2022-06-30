<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Alert;

class MasterController extends Controller
{

    public function master()
    {
        return view('masters.master');
    }
    public function addMasterForm()
    {

        return view('masters.addMasterForm');
    }
}
