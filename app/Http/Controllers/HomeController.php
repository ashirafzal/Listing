<?php

namespace App\Http\Controllers;

use App\Models\ContactInfo;
use App\Models\Listing;
use App\Models\RequestQuotes;
use App\Models\Reviews;
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

        $Vendor = Vendor::where('user_id', $user->id)->get();

        return view('dashboard.profile', [
            'user' => $user,
            'vendor' => $Vendor
        ]);
    }

    public function ContactUs(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'firstname' => 'required',
            'lastname' => 'required',
            'address' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'message' => 'required'
        ]);

        if ($validate->fails()){
            return redirect()->back()->withErrors($validate->errors());
        }

        $contact = new ContactInfo();

        $contact->firstname = $request->firstname;
        $contact->lastname = $request->lastname;
        $contact->email = $request->email;
        $contact->phone = $request->phone;
        $contact->message = $request->message;

        $contact->save();

        return redirect()->back()->withSuccess('We will contact you soon. tour request has been submitted.');
    }
}
