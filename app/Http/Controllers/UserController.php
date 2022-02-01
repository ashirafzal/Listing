<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Vendor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{

    public function index()
    {
    }

    public function view(Request $request)
    {
    }

    public function create(Request $request)
    {
    }

    public function BeAVendor()
    {
        $user = Auth::user();

        $vendor = new Vendor();

        $vendor->name = $user->name;
        $vendor->email = $user->email;
        $vendor->phone_number = $user->phone_number;
        $vendor->user_id = $user->id;
        $vendor->image = $user->image;
        $vendor->status = Vendor::STATUS_NOT_BLOCKED;

        $vendor->save();

        return redirect()->back()->withSuccess('Congratulations now you are a vendor.');
    }

    public function edit(Request $request)
    {

        $validate = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required',
        ]);

        if ($validate->fails()){
            return redirect()->back()->withErrors($validate->errors());
        }

        if ($request->hasFile('image')) {
            $img = $request->file('image');
            $extention = $img->getClientOriginalExtension();
            $filename = time() . '.' . $extention;
            $img->move('user-image', $filename);
            $userimage = $filename;
        }

        $user = Auth::user();

        if(!$user){
            return redirect()->back()->withErrors('Please login to edit your profile.');
        }

        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password ?? $user->password;
        $user->phone_number = $request->phone ?? $user->phone_number;
        $user->description = $request->description ?? $user->description;
        $user->image = $userimage ?? $user->image;

        $user->save();

        return redirect()->back()->withSuccess('Your profile has been updated.');
    }

    public function UpdatePassword(Request $request)
    {

        $validate = Validator::make($request->all(), [
            'currentpassword' => 'required',
            'newpassword' => 'required',
            'retypepassword' => 'required',
        ]);

        if ($validate->fails()){
            return redirect()->back()->withErrors($validate->errors());
        }

        $user = Auth::user();

        if(!$user){
            return redirect()->back()->withErrors('Please login to update the password.');
        }

        $CurrentPassword = $request->currentpassword;

        if (Hash::check($CurrentPassword, $user->password))
        {
            if ($request->newpassword == $request->retypepassword) {

                $user->password = Hash::make($request->newpassword);
                $user->save();

                return redirect()->back()->withSuccess('Your account password has been changed.');
            }
            else
            {
                return redirect()->back()->withErrors('New password and retype password mismatched.');
            }
        } 
        else 
        {
            return redirect()->back()->withErrors('you have entered wrong password .Please enter correct password');
        }
    }

    public function delete(Request $request)
    {
    }
}
