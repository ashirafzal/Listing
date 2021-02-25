<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use App\Models\RequestQuotes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class RequestQuotesController extends Controller
{

    public function index()
    {
        $user = Auth::user();

        if(!$user){
            return redirect()->back()->withErrors('Please Login for viewing the request quotes.');
        }

        if($user->isUser()){
            return redirect()->back()->withErrors('You must have to be a vendor to view request quotes.');
        }
        
        $RequestQuote = RequestQuotes::where('user_id', $user->id)->paginate(10);

        return view('dashboard.request-quote', [
            'user' => $user,
            'RequestQuote' => $RequestQuote
        ]);
    }

    public function view(Request $request)
    {
        $user = Auth::user();

        if(!$user){
            return redirect()->back()->withErrors('Please Login to view request quote.');
        }

        $RequestQuotes = RequestQuotes::where('id',$request->id)->get();
    }

    public function singlesearchview(Request $request)
    {
        $user = Auth::user();

        if(!$user){
            return redirect()->back()->withErrors('Please Login to view request quote.');
        }

        $RequestQuotes = RequestQuotes::find($request->id);
    }

    public function create(Request $request)
    {
        $user = Auth::user();

        if(!$user){
            return redirect()->back()->withErrors('Please Login for submiting a request quote.');
        }

        $validate = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'comment' => 'required',
        ]);

        if ($validate->fails()){
            return redirect()->back()->withErrors($validate->errors());
        }

        $vendor = Listing::where('id',$request->listing_id)->first();

        $RequestQuotes = new RequestQuotes();

        $RequestQuotes->user_id = $user->id;
        $RequestQuotes->listing_id = $request->listing_id;
        $RequestQuotes->name = $request->name;
        $RequestQuotes->email = $request->email;
        $RequestQuotes->phone = $request->phone;
        $RequestQuotes->comment = $request->comment;
        $RequestQuotes->vendor_id = $vendor->vendor_id;

        $RequestQuotes->save();

        return redirect()->back()->withSuccess('Your request quote has been submitted.');
    }

    public function edit(Request $request)
    {
        $user = Auth::user();

        if(!$user){
            return redirect()->back()->withErrors('Please Login to edit a request quote.');
        }

        $RequestQuotes = RequestQuotes::find($request->id);

        $RequestQuotes->user_id = $user->id;
        $RequestQuotes->listing_id = $request->id;
        $RequestQuotes->save();
    }

    public function delete($id)
    {
        $user = Auth::user();

        if(!$user){
            return redirect()->back()->withErrors('Please Login for deleting a request quote.');
        }

        RequestQuotes::where('id',$id)->delete();

        return redirect()->back()->withSuccess('Request quote has been deleted.');
    }

}
