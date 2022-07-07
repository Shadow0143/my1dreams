<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;
use Intervention\Image\Facades\Image;



class MemberController extends Controller
{
   
    public function member()
    {
        $limit = User::where('refral_by',Auth::user()->refral_code)->where('status','1')->count();
        $memberList = User::select('id', 'name', 'refral_code', 'status', 'is_block', 'Phone_number', 'address', 'email', 'profile_pic')->where('user_type', 'Member')->where('refral_by',Auth::user()->refral_code)->get();
        return view('members.member', compact('memberList','limit'));
    }

    public function addMemberForm()
    {
        return view('members.addMemberForm');
    }

    public function submitMember(Request $request)
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
            $master->refral_code = 'MEMB000' . $newmaxid;
            $master->refral_by = Auth::user()->refral_code;
            $master->name = $request->full_name;
            $master->password = Hash::make($request->password);
            $master->email = $request->email;
            $master->status = '1';
            $master->is_block = 'no';
            $master->Phone_number = $request->phone;
            $master->address = $request->address;
            $master->user_type = 'Member';
            $master->role = '2';

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
        return redirect()->route('member');
    }

    public function blockMember(Request $request)
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

    public function editMember($id)
    {
        $member = User::find($id);
        return view('members.editMemberForm', compact('member'));
    }

    public function deleteMember(Request $request)
    {
        $deleteMember = User::find($request->member_id);
        $deleteMember->delete();

        return $request->member_id;
    }
}
