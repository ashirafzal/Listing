<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\ContactInfo;
use App\Models\Listing;
use App\Models\RequestQuotes;
use App\Models\Reviews;
use App\Models\User;
use App\Models\Vendor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
    
        $user = Auth::user();

        if($user->isAdmin() || $user->isSuperAdmin()){

            $UsersCount = User::count();
            $VendorsCount = Vendor::count();
            $ListingCount = Listing::count();
            $ReviewsCount = Reviews::count();
            $RequestQuotesCount = RequestQuotes::count();

            return view('admin-dashboard.admin-home', [ 'user' => $user, 'UsersCount' => $UsersCount ,'VendorsCount' => $VendorsCount, 'ListingCount' => $ListingCount, 'ReviewsCount' => $ReviewsCount, 'RequestQuotesCount' => $RequestQuotesCount ]);
        }

        $vendor = Vendor::where('user_id', $user->id)->first();

        if($vendor){
            $ListingCount = Listing::where('vendor_id', $vendor->id)->count();
            $ReviewsCount = Reviews::where('vendor_id', $vendor->id)->count();
            $RequestQuotesCount = RequestQuotes::where('vendor_id', $vendor->id)->count();
        }else{
            $ListingCount = 0;
            $ReviewsCount = 0;
            $RequestQuotesCount = 0;
        }
        
        if (!$user) {
            return redirect()->back()->withErrors('Please Login to view dashboard.');
        }

        return view('home', [ 'user' => $user, 'vendor' => $vendor, 'ListingCount' => $ListingCount, 'ReviewsCount' => $ReviewsCount, 'RequestQuotesCount' => $RequestQuotesCount ]);
    
    }

    public function profile()
    {

        $user = Auth::user();

        if (!$user) {
            return redirect()->back()->withErrors('Please Login to view your profile.');
        }

        if($user->isAdmin() || $user->isSuperAdmin()){
            return view('admin-dashboard.admin-profile', ['user' => $user]);
        }

        $Vendor = Vendor::where('user_id', $user->id)->get();

        return view('dashboard.profile', ['user' => $user, 'vendor' => $Vendor]);

    }
    
}
