<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Alert;
use Hash;
use Image;

class MasterController extends Controller
{

    public function master()
    {
        $masterList = User::select('id','name','refral_code','status','is_block','Phone_number','address','email','profile_pic')->get();
        return view('masters.master',compact('masterList'));
    }

    public function addMasterForm()
    {
        return view('masters.addMasterForm');
    }

    public function submitMaster(Request $request)
    {
        // dd($request->all());
        $validated = $request->validate([
            'full_name' => 'required',
            'email' => 'required|email',
            'password' => 'required|password|min:8',
       ]);


       $master = new User;
       $master->refral_code = 'MAST'.rand(000,999);
       $master->refral_by = Auth::user()->refral_code;
       $master->name = $request->full_name; 
       $master->password = Hash::make($request->password); 
       $master->email = $request->email ; 
       $master->status = '1'; 
       $master->is_block = 'no'; 
       $master->Phone_number = $request->phone; 
       $master->address = $request->address; 
       $master->user_type ='Master'; 
       $master->role = '1' ; 

       $image = $request->file('profile_pic');
            if (!empty($image)) {
                $input['imagename'] = 'profilePic'.time() . '.' . $image->getClientOriginalExtension();
                $destinationPath = public_path('/uploads/profilePic');
                $img = Image::make($image->getRealPath());
                $img->resize(1024, 768, function ($constraint) {
                    $constraint->aspectRatio();
                })->save($destinationPath . '/' . $input['imagename']);
                $master->profile_pic = $input['imagename'];
            }
       $master->save();
       Alert::success('Success ', 'Master added successfully');
       return redirect('/admin/master'); 


    }


}
