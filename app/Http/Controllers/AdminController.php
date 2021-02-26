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

    public function UserShow($id)
    {
        $user = Auth::user();
        $Users = User::where('id', $id)->first();

        return view('admin-dashboard.admin-user-show', [ 'user' => $user, 'Users' => $Users]);
    }

    public function VendorShow($id)
    {
        $user = Auth::user();
        $Vendors = Vendor::where('id', $id)->first();

        return view('admin-dashboard.admin-vendor-show', [ 'user' => $user, 'Vendors' => $Vendors]);
    }

}