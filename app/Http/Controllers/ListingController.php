<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use App\Models\Vendor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ListingController extends Controller
{

    public function index()
    {
        $user = Auth::user();

        $Listing = Listing::paginate(10);

        return view('dashboard.ListedItems', [
            'user' => $user,
            'listings' => $Listing
        ]);
    }

    public function AddListingIndex()
    {
        $user = Auth::user();

        return view('dashboard.add-listing', [
            'user' => $user,
        ]);
    }

    public function view(Request $request)
    {
        $Listing = Listing::where('id',$request->id)->get();
    }

    public function singlesearchview(Request $request)
    {
        $Listing = Listing::find($request->id);
    }

    public function create(Request $request)
    {
        $vendor = Vendor::where('user_id', Auth::user()->id)->first();

        $Listing = new Listing();

        if ($request->hasFile('hero_image')) {
            $hero_image = $request->file('hero_image');
            $extention = $hero_image->getClientOriginalExtension();
            $filename = time() . '.' . $extention;
            $hero_image->move('listing-image', $filename);
            $hero_image = $filename;
        }

        if ($request->hasFile('image1')) {
            $image1 = $request->file('image1');
            $extention = $image1->getClientOriginalExtension();
            $filename = time() . '.' . $extention;
            $image1->move('listing-image', $filename);
            $image1 = $filename;
        }

        if ($request->hasFile('image2')) {
            $image2 = $request->file('image2');
            $extention = $image2->getClientOriginalExtension();
            $filename = time() . '.' . $extention;
            $image2->move('listing-image', $filename);
            $image2 = $filename;
        }

        if ($request->hasFile('image3')) {
            $image3 = $request->file('image3');
            $extention = $image3->getClientOriginalExtension();
            $filename = time() . '.' . $extention;
            $image3->move('listing-image', $filename);
            $image3 = $filename;
        }

        $Listing->title = $request->title;
        $Listing->category = $request->category;
        $Listing->city = $request->city;
        $Listing->country = $request->country;
        $Listing->zipcode = $request->zipcode;
        $Listing->description = $request->description;
        $Listing->latitude = $request->latitude;
        $Listing->longitude = $request->longitude;
        $Listing->hero_image = $hero_image;
        $Listing->image1 = $image1 ?? '';
        $Listing->image2 = $image2 ?? '';
        $Listing->image3 = $image3 ?? '';
        $Listing->facebook = $request->facebook;
        $Listing->twitter = $request->twitter;
        $Listing->instagram = $request->instagram;
        $Listing->youtube = $request->youtube;
        $Listing->featured = false;
        $Listing->status = false;
        $Listing->vendor_name = $vendor->name;
        $Listing->vendor_email = $vendor->email;
        $Listing->vendor_phone_number = $vendor->phone_number;
        $Listing->vendor_id = $vendor->id;
        $Listing->vendor_status = $vendor->status;

        $Listing->save();

        return redirect()->back()->withSuccess('List has been created .');

    }

    public function edit(Request $request)
    {

    }

    public function delete(Request $request)
    {
        Listing::where('id',$request->id)->delete();
    }

}
