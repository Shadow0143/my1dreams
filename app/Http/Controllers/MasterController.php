<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MasterController extends Controller
{
    public function addMasterForm()
    {
        return view('masters.addMasterForm');
    }
}
