<?php

namespace App\Http\Controllers;

use App\Models\Reviews;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class ReviewsController extends Controller
{

    public function index()
    {
        $user = Auth::user();

        if(!$user){
            return redirect()->back()->withErrors('Please Login for viewing reviews.');
        }

        $Review = Reviews::where('user_id', $user->id)->paginate(10);
        $ReviewsCount = Reviews::where('user_id', $user->id)->count();
        $AvgReviewsRating = Reviews::where('user_id', $user->id)->avg('rating');

        return view('dashboard.reviews', ['user' => $user,'Review' => $Review, 'ReviewsCount' => $ReviewsCount, 'AvgReviewsRating' => $AvgReviewsRating]);
    }

    public function view(Request $request)
    {
        $user = Auth::user();

        if(!$user){
            return redirect()->back()->withErrors('Please Login for viewing reviews.');
        }

        $Reviews = Reviews::where('id', $request->id)->get();
    }

    public function singlesearchview(Request $request)
    {
        $user = Auth::user();

        if(!$user){
            return redirect()->back()->withErrors('Please Login to view review.');
        }

        $Reviews = Reviews::find($request->id);
    }

    public function create(Request $request)
    {
        $user = Auth::user();

        if(!$user){
            return redirect()->back()->withErrors('Please Login for submiting a review.');
        }

        $validate = Validator::make($request->all(), [
            'review' => 'required',
            'name' => 'required',
            'email' => 'required',
            'rating' => 'required',
        ]);

        if ($validate->fails()){
            return redirect()->back()->withErrors($validate->errors());
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
        $user = Auth::user();

        if(!$user){
            return redirect()->back()->withErrors('Please Login to edit review.');
        }

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

    public function delete($id)
    {
        $user = Auth::user();

        if(!$user){
            return redirect()->back()->withErrors('Please Login to delete reviews.');
        }

        Reviews::where('id', $id)->delete();
    }
}
