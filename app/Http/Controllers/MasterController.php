<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Coin;
use App\Models\PlayGame;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Hash;
use Intervention\Image\Facades\Image;
use App\Models\Result;

class MasterController extends Controller
{

    public function master()
    {
        $masterList = User::select('id', 'name', 'refral_code', 'status', 'is_block', 'Phone_number', 'address', 'email', 'profile_pic')->where('user_type', 'Master')->orderBy('id','DESC')->get();
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

            $maxid = User::max('id');
            $newmaxid = $maxid + 1 ;
            $master = new User;
            $master->refral_code = 'MAST000' .$newmaxid;
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
        $members = User::with('coins')->whereIn('role',['2','1'])->orderBy('id','DESC')->get();
        foreach($members as $val)
        {
            $playgame = PlayGame::where('user_id',$val->id)->sum('amount');
            $val->usedCoin = $playgame;
        }
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

    public function memberBySuperAdmin()
    {
        $memberList = User::where('user_type','Member')->orderBy('id','DESC')->get();
        return view('masters.memberBySuperAdmin',compact('memberList'));
    }

    public function memberBySuperAdminForm()
    {
        $masterList = User::where('status',1)->where('is_block','no')->where('user_type','Master')->get();
        return view('masters.memberBySuperAdminForm',compact('masterList'));
    }

    public function submitMemberForm(Request $request)
    {
        // dd($request->all());

        if (!empty($request->member_id)) {
            $member = User::find($request->member_id);
            $member->name = $request->full_name;
            if (!empty($request->password)) {
                $member->password = Hash::make($request->password);
            }
            $member->email = $request->email;
            $member->status = $request->status;
            $member->Phone_number = $request->phone;
            $member->address = $request->address;
            $image = $request->file('profile_pic');
            if (!empty($image)) {
                $input['imagename'] = 'profilePic' . time() . '.' . $image->getClientOriginalExtension();
                $destinationPath = public_path('/uploads/profilePic');
                $img = Image::make($image->getRealPath());
                $img->resize(1024, 768, function ($constraint) {
                    $constraint->aspectRatio();
                })->save($destinationPath . '/' . $input['imagename']);
                $member->profile_pic = $input['imagename'];
            }
            $member->save();
            if ($member) {
                Alert::success('Success ', 'Master updated successfully');
            } else {
                Alert::warning('Warning ', 'Please try again latter');
            }
        } else {
            $validated = $request->validate([
                'full_name' => 'required',
                'email' => 'required|email',
                'phone' => 'required|max:10',
            ]);


            $maxid = User::max('id');
            $newmaxid = $maxid + 1 ;
            $member = new User;
            $member->refral_code = 'MEMB000' . $newmaxid;
            $member->refral_by = $request->master_id;
            $member->name = $request->full_name;
            $member->password = Hash::make($request->password);
            $member->email = $request->email;
            $member->status = '1';
            $member->is_block = 'no';
            $member->Phone_number = $request->phone;
            $member->address = $request->address;
            $member->user_type = 'Member';
            $member->role = '2';

            $image = $request->file('profile_pic');
            if (!empty($image)) {
                $input['imagename'] = 'profilePic' . time() . '.' . $image->getClientOriginalExtension();
                $destinationPath = public_path('/uploads/profilePic');
                $img = Image::make($image->getRealPath());
                $img->resize(1024, 768, function ($constraint) {
                    $constraint->aspectRatio();
                })->save($destinationPath . '/' . $input['imagename']);
                $member->profile_pic = $input['imagename'];
            }
            $member->save();
            Alert::success('Success ', 'Master added successfully');
        }
        
        return redirect()->route('memberBySuperAdmin');
    }

    public function blockMemberBySuperadmin(Request $request)
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

    public function deleteMemberBySuperadmin(Request $request)
    {
        $deleteMember = User::find($request->member_id);
        $deleteMember->delete();

        return $request->member_id;
    }

    public function editMemberBySuperadmin($id)
    {
        $member = User::find($id);
        return view('masters.editMemberBySuperAdmin',compact('member'));
    }

    public function result(){
        $result = Result::orderBy('id','DESC')->get();
        return view('masters.result',compact('result'));
    }

    public function resultForm(){
        return view('masters.resultForm');
    }

    public function submitResult(Request $request)
    {
        $lastvalue = substr($request->sum_value, -1);
        $result = new Result();
        $result->result_date = $request->result_date;
        $result->game_time = $request->result_time;
        $result->first_value = $request->first_value;
        $result->second_value = $request->second_value;
        $result->third_value = $request->third_value;
        $result->sum = $request->sum_value;
        $result->result = $lastvalue;
        $result->save();
        Alert::success('success','Result submited successfully.');
        return redirect()->route('result');
    }
}
