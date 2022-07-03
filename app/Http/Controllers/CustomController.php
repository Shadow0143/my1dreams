<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Alert;
use Hash;
use Image;

class CustomController extends Controller
{
    
    public function customLogin(Request $request)
    {
        $check = 0;
        $request->validate([
            'Phone_number' => 'required',
            'password' => 'required'
        ]);

        $credentials = $request->except(['_token']);

        $users = User::select('Phone_number')->where('status',1)->get();
        // dd($users);
        
        foreach ($users as $user) {
            if($user->Phone_number == $request->Phone_number)
            {
                $check = 1;
            }
        }
        // dd($credentials);
        if($check == 1)
        {
            if (auth()->attempt($credentials)) {

            return redirect()->route('home');

            }else{
                $this->sendFailedLoginResponse('message', 'Your password not matched in our records');
                return redirect()->back();
            }
        }else
        {
           $this->sendFailedLoginResponse('message', 'Your phone number is not matched in our records');

           return redirect()->back();
        }

    }

    public function sendFailedLoginResponse(string $key = null, string $message = null)
    {
        session()->flash( $key, $message );
    }

    public function blockPage()
    {
        return view('blockpage');
    }
    
    public function noAccessPage()
    {
        return view('noaccess');
    }
}
