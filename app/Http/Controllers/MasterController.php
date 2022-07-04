<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Coin;
use RealRashid\SweetAlert\Facades\Alert;
use Hash;
use Image;

class MasterController extends Controller
{

    public function master()
    {
        $masterList = User::select('id', 'name', 'refral_code', 'status', 'is_block', 'Phone_number', 'address', 'email', 'profile_pic')->where('user_type', 'Master')->get();
        return view('masters.master', compact('masterList'));
    }

    public function addMasterForm()
    {
        return view('masters.addMasterForm');
    }

    public function submitMaster(Request $request)
    {
        if (!empty($request->master_id)) {
            $master = User::find($request->master_id);
            $master->name = $request->full_name;
            if (!empty($request->password)) {
                $master->password = Hash::make($request->password);
            }
            $master->email = $request->email;
            $master->status = $request->status;
            $master->Phone_number = $request->phone;
            $master->address = $request->address;
            $image = $request->file('profile_pic');
            if (!empty($image)) {
                $input['imagename'] = 'profilePic' . time() . '.' . $image->getClientOriginalExtension();
                $destinationPath = public_path('/uploads/profilePic');
                $img = Image::make($image->getRealPath());
                $img->resize(1024, 768, function ($constraint) {
                    $constraint->aspectRatio();
                })->save($destinationPath . '/' . $input['imagename']);
                $master->profile_pic = $input['imagename'];
            }
            $master->save();
            if ($master) {
                Alert::success('Success ', 'Master updated successfully');
            } else {
                Alert::warning('Warning ', 'Please try again latter');
            }
        } else {

            $validated = $request->validate([
                'full_name' => 'required',
                'email' => 'required|email',
                'phone' => 'required|max:10',
                'password' => 'required|password|min:8',
                'confirm_password' => 'required|password|min:8',
            ]);


            $master = new User;
            $master->refral_code = 'MAST' . rand(000, 999);
            $master->refral_by = Auth::user()->refral_code;
            $master->name = $request->full_name;
            $master->password = Hash::make($request->password);
            $master->email = $request->email;
            $master->status = '1';
            $master->is_block = 'no';
            $master->Phone_number = $request->phone;
            $master->address = $request->address;
            $master->user_type = 'Master';
            $master->role = '1';

            $image = $request->file('profile_pic');
            if (!empty($image)) {
                $input['imagename'] = 'profilePic' . time() . '.' . $image->getClientOriginalExtension();
                $destinationPath = public_path('/uploads/profilePic');
                $img = Image::make($image->getRealPath());
                $img->resize(1024, 768, function ($constraint) {
                    $constraint->aspectRatio();
                })->save($destinationPath . '/' . $input['imagename']);
                $master->profile_pic = $input['imagename'];
            }
            $master->save();
            Alert::success('Success ', 'Master added successfully');
        }
        return redirect()->route('master');
    }

    public function blockMaster(Request $request)
    {
        $master = User::find($request->master_id);
        if ($request->master_type == 'unblock') {
            $master->is_block = 'no';
        } else {
            $master->is_block = 'yes';
        }
        $master->save();
        $send = ['id' => $request->master_id, 'type' => $request->master_type];
        return $send;
    }

    public function editMaster($id)
    {
        $master = User::find($id);
        return view('masters.editMasterForm', compact('master'));
    }


    public function refillAmount()
    {
        $members = User::with('coins')->whereIn('role',['2','1'])->get();
        // dd($members);
        return view('masters.refillAmount',compact('members'));
    }

    public function submitRefillAmount(Request $request)
    {
        // dd($request->all());
        $coins = Coin::select('available_amount')->where('refral_code',$request->refCode)->orderBy('id','desc')->first();
        $user = User::select('id')->where('refral_code',$request->refCode)->first();
        if(!empty($coins)){
            $available_balance = $coins->available_amount;
        }else{
            $available_balance = 0;
        }

        $availabeAmount = $request->refill_amount + $available_balance;

        $coin = new Coin();
        $coin->refral_code = $request->refCode;
        $coin->user_id = $user->id;
        $coin->refill_amount = $request->refill_amount;
        $coin->available_amount = $availabeAmount;
        $coin->save();

        Alert::Success('success','Re-filled Success');
        return back();


    }
}
