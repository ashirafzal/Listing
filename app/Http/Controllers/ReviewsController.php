<?php

namespace App\Http\Controllers;

use App\Models\Reviews;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReviewsController extends Controller
{

    public function index()
    {
        $Reviews = Reviews::all();
    }

    public function view(Request $request)
    {
        $Reviews = Reviews::where('id', $request->id)->get();
    }

    public function singlesearchview(Request $request)
    {
        $Reviews = Reviews::find($request->id);
    }

    public function create(Request $request)
    {
        $user = Auth::user();

        if(!$user){
            return redirect()->back()->withErrors('Please Login for submiting a review.');
        }

        $Reviews = new Reviews();

        $Reviews->vendor_id = $request->vendor_id;
        $Reviews->listing_id = $request->listing_id;
        $Reviews->user_id = $user->id;
        $Reviews->user_name = $user->name;
        $Reviews->user_image = $user->image;
        $Reviews->user_email = $user->email;
        $Reviews->user_type = $user->role;
        $Reviews->review_text = $request->review;
        $Reviews->review_email = $request->email;
        $Reviews->rating = $request->rating;
        $Reviews->date_time = now();
        $Reviews->save();

        return redirect()->back()->withSuccess('Your review has been submitted.');
    }

    public function edit(Request $request)
    {
        $user = User::where('id', Auth::id())->get();

        $Reviews = Reviews::find($request->id);

        $Reviews->vendor_id = $Reviews->vendor_id;
        $Reviews->listing_id = $Reviews->listing_id;
        $Reviews->user_id = $user->id;
        $Reviews->user_name = $user->name;
        $Reviews->user_image = $user->user_image;
        $Reviews->user_email = $user->email;
        $Reviews->user_type = $user->type;
        $Reviews->review_text = $request->review_text;
        $Reviews->review_email = $request->review_email;
        $Reviews->rating = $request->rating;
        $Reviews->date_time = now();
        $Reviews->save();
    }

    public function delete(Request $request)
    {
        Reviews::where('id', $request->id)->delete();
    }
}
