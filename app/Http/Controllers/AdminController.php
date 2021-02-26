<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use App\Models\User;
use App\Models\Vendor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function TotalListingView()
    {
        $user = Auth::user();
        $TotalListing = Listing::orderBy('id','DESC')->paginate(30);

        return view('admin-dashboard.total-listing', [ 'user' => $user, 'TotalListing' => $TotalListing]);
    }

    public function TotalUsersView()
    {
        $user = Auth::user();
        $TotalUser = User::orderBy('id','DESC')->paginate(30);

        return view('admin-dashboard.total-users', [ 'user' => $user, 'TotalUser' => $TotalUser]);
    }

    public function TotalVendorsView()
    {
        $user = Auth::user();
        $TotalVendor = Vendor::orderBy('id','DESC')->paginate(30);

        return view('admin-dashboard.total-vendors', [ 'user' => $user, 'TotalVendor' => $TotalVendor]);
    }

    public function AdminListShow($id)
    {
        $user = Auth::user();
        $Listing = Listing::where('id', $id)->first();

        return view('admin-dashboard.admin-list-show', [ 'user' => $user, 'Listing' => $Listing]);
    }

    public function ListDelete($id)
    {
        $user = Auth::user();

        if($user->isUser())
        {
            return redirect()->back()->withErrors("You don't have permission to delete listings .");
        }

        Listing::where('id',$id)->delete();
        return redirect('admin-listings')->withSuccess('List deleted Successfully .');
    }

    public function UserShow($id)
    {
        $user = Auth::user();
        $Users = User::where('id', $id)->first();

        return view('admin-dashboard.admin-user-show', [ 'user' => $user, 'Users' => $Users]);
    }

    public function UserDelete($id)
    {
        $user = User::where('id',$id)->first();

        if($user->isSuperAdmin()){
            return redirect()->back()->withErrors('Super Admin cannot be deleted');
        }

        if($user->isAdmin()){

            $ControllingUser = Auth::user();

            if(!$ControllingUser->isSuperAdmin())
            {
                return redirect()->back()->withErrors('Only super admin can be delete admin.');
            }
            else
            {
                $user->delete();
                return redirect()->back()->withSuccess('User deleted Successfully.');
            }
        }

        $user->delete();
        return redirect('admin-users')->withSuccess('User deleted Successfully.');

    }

    public function VendorShow($id)
    {
        $user = Auth::user();
        $Vendors = Vendor::where('id', $id)->first();

        return view('admin-dashboard.admin-vendor-show', [ 'user' => $user, 'Vendors' => $Vendors]);
    }

    public function VendorDelete($id)
    {
        $user = Auth::user();
        
        if($user->isUser() || $user->isVendor())
        {
            return redirect()->back()->withErrors('Only admins and super admin can delete vendors .');
        }

        Vendor::where('id',$id)->delete();
        return redirect('admin-vendors')->withSuccess('Vendor deleted Successfully.');
    }

}