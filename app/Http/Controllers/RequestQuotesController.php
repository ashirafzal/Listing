<?php

namespace App\Http\Controllers;

use App\Models\RequestQuotes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RequestQuotesController extends Controller
{

    public function index()
    {
        $user = Auth::user();

        if(!$user){
            return redirect()->back()->withErrors('Please Login for viewing the request quotes.');
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

        $RequestQuotes = new RequestQuotes();

        $RequestQuotes->user_id = $user->id;
        $RequestQuotes->listing_id = $request->listing_id;
        $RequestQuotes->name = $request->name;
        $RequestQuotes->email = $request->email;
        $RequestQuotes->phone = $request->phone;
        $RequestQuotes->comment = $request->comment;

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

        $RequestQuotes->user_id = Auth::user()->id;
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
