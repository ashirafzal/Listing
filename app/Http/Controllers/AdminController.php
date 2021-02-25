<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function TotalListingView()
    {
        $user = Auth::user();
        $TotalListings = Listing::orderBy('id','DESC')->paginate(50);

        return view('admin-dashboard.total-listing', [ 'user' => $user, 'TotalListings' => $TotalListings]);
    }

    public function TotalUsersView()
    {
        $user = Auth::user();
        $TotalUsers = User::orderBy('id','DESC')->paginate(50);

        return view('admin-dashboard.total-users', [ 'user' => $user, 'TotalUsers' => $TotalUsers]);
    }

}