<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use RealRashid\SweetAlert\Facades\Alert;
use Intervention\Image\Facades\Image;

class ProfileController extends Controller
{
    public function viewProfile($refral_code)
    {
        $userDetail = User::where('refral_code',$refral_code)->first();
        return view('profile',compact('userDetail'));
    }

    public function saveProfileImage(Request $request)
    {
        // dd($request->all());

        $user = User::find($request->user_id);
        $image = $request->file('user_pic');
            if (!empty($image)) {
                $input['imagename'] = 'profilePic' . time() . '.' . $image->getClientOriginalExtension();
                $destinationPath = public_path('/uploads/profilePic');
                $img = Image::make($image->getRealPath());
                $img->resize(1024, 768, function ($constraint) {
                    $constraint->aspectRatio();
                })->save($destinationPath . '/' . $input['imagename']);
                $user->profile_pic = $input['imagename'];
            }
            $user->save();

            Alert::success('Success','Profile Pic Changed.');
            return back();
    }

    public function saveUserDetails(Request $request)
    {
        $user = User::find($request->user_id);
        $user->name = $request->user_name;
        $user->email = $request->user_email;
        $user->Phone_number = $request->user_mobile;
        $user->address = $request->user_address;
        $user->save();

        Alert::success('Success','Profile updated.');
        return redirect()->route('home');
    }


}
