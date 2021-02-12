<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;

class ListingController extends Controller
{

    public function index()
    {
        $Listing = Listing::all();
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
        $Listing = new Listing();

        $Listing->title = $request->title;
        $Listing->category = $request->category;
        $Listing->city = $request->city;
        $Listing->country = $request->country;
        $Listing->zipcode = $request->zipcode;
        $Listing->description = $request->description;
        $Listing->latitude = $request->latitude;
        $Listing->longitude = $request->longitude;
        $Listing->hero_image = $request->hero_image;
        $Listing->image1 = $request->image1;
        $Listing->image2 = $request->image2;
        $Listing->image3 = $request->image3;
        $Listing->facebook = $request->facebook;
        $Listing->twitter = $request->twitter;
        $Listing->instagram = $request->instagram;
        $Listing->youtube = $request->youtube;

        $Listing->save();

    }

    public function edit(Request $request)
    {

    }

    public function delete(Request $request)
    {
        Listing::where('id',$request->id)->delete();
    }

}
