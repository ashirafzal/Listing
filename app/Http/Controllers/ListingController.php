<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use App\Models\Reviews;
use App\Models\Vendor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ListingController extends Controller
{
    
    public function WelcomeIndex(){
        $FeaturedListing = Listing::where('featured',true)->paginate(10);

        $NonFeaturedListing = Listing::where('featured',false)->paginate(10);

        return view('welcome', [
            'FeaturedListing' => $FeaturedListing,
            'NonFeaturedListing' => $NonFeaturedListing
        ]);
    }

    public function index()
    {
        $user = Auth::user();

        if(!$user){
            return redirect()->route('login')->withErrors('Please login to view listing.');
        }

        $Listing = Listing::paginate(10);

        return view('dashboard.ListedItems', [
            'user' => $user,
            'listings' => $Listing
        ]);
    }

    public function AddListingIndex()
    {
        $user = Auth::user();

        if(!$user){
            return redirect()->back()->withErrors('Please login to add listing.');
        }

        return view('dashboard.add-listing', [
            'user' => $user,
        ]);
    }

    public function view(Request $request)
    {
        $Listing = Listing::where('id', $request->id)->first();

        $VendorDetails = Vendor::where('id', $Listing->vendor_id)->first();
        $Reviews = Reviews::where('listing_id', $Listing->id)->paginate(5);
        $ReviewsCount = Reviews::where('listing_id', $Listing->id)->count();
        $AvgReviewsRating = Reviews::where('listing_id', $Listing->id)->avg('rating');
        $SimiliarListing = Listing::where('vendor_id', $Listing->vendor_id)->paginate(6);

        return view('list-detail', [
            'listings' => $Listing, 'VendorDetails' => $VendorDetails, 'Reviews' => $Reviews, 'AvgReviewsRating' => $AvgReviewsRating,
            'ReviewsCount' => $ReviewsCount, 'SimiliarListing' => $SimiliarListing
        ]);
    }

    public function create(Request $request)
    {
        $user = Auth::user();

        if(!$user){
            return redirect()->back()->withErrors('Please login to create listing.');
        }

        $vendor = Vendor::where('user_id', $user->id)->first();

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
        $Listing->address = $request->address;
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

    public function EditView($id)
    {
        $user = Auth::user();

        if(!$user){
            return redirect()->back()->withErrors('Please login to edit listing.');
        }
        
        $Listing = Listing::where('id', $id)->first();

        return view('dashboard.edit-listing', [
            'user' => $user,
            'listings' => $Listing,
        ]);
    }

    public function edit(Request $request)
    {

        $user = Auth::user();

        if(!$user){
            return redirect()->back()->withErrors('Please login to edit listing.');
        }

        $listing = Listing::where('id', $request->id)->first();

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

        $listing->title = $request->title ?? $listing->title;
        $listing->category = $request->category ?? $listing->category;
        $listing->city = $request->city ?? $listing->city;
        $listing->country = $request->country ?? $listing->country;
        $listing->zipcode = $request->zipcode ?? $listing->zipcode;
        $listing->address = $request->address ?? $listing->address;
        $listing->description = $request->description ?? $listing->description;
        $listing->latitude = $request->latitude ?? $listing->latitude;
        $listing->longitude = $request->longitude ?? $listing->longitude;
        $listing->hero_image = $hero_image ?? $listing->hero_image;
        $listing->image1 = $image1 ?? $listing->image1;
        $listing->image2 = $image2 ?? $listing->image2;
        $listing->image3 = $image3 ?? $listing->image3;
        $listing->facebook = $request->facebook ?? $listing->facebook;
        $listing->twitter = $request->twitter ?? $listing->twitter;
        $listing->instagram = $request->instagram ?? $listing->instagram;
        $listing->youtube = $request->youtube ?? $listing->youtube;

        $listing->save();

        return redirect()->back()->withSuccess('List has been updated .');
    }

    public function delete($id)
    {
        $user = Auth::user();

        if(!$user){
            return redirect()->back()->withErrors('Please login to create listing.');
        }

        Listing::where('id', $id)->delete();

        return redirect('listing')->withSuccess('List Deleted Successfully.');
    }
}
