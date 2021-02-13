<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Vendor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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
        if ($request->hasFile('image')) {
            $img = $request->file('image');
            $extention = $img->getClientOriginalExtension();
            $filename = time() . '.' . $extention;
            $img->move('user-image', $filename);
            $userimage = $filename;
        }

        $user = Auth::user();

        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone_number = $request->phone;
        $user->description = $request->description;
        $user->image = $userimage ?? '';

        $user->save();

        return redirect()->back()->withSuccess('Your profile has been updated.');
    }

    public function UpdatePassword(Request $request)
    {
        $user = Auth::user();

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
