<?php

namespace App\Http\Controllers;

use App\Models\RequestQuotes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RequestQuotesController extends Controller
{

    public function index()
    {
        $RequestQuotes = RequestQuotes::all();
    }

    public function view(Request $request)
    {
        $RequestQuotes = RequestQuotes::where('id',$request->id)->get();
    }

    public function singlesearchview(Request $request)
    {
        $RequestQuotes = RequestQuotes::find($request->id);
    }

    public function create(Request $request)
    {
        $RequestQuotes = new RequestQuotes();

        $RequestQuotes->user_id = Auth::user()->id;
        $RequestQuotes->listing_id = $request->id;
        $RequestQuotes->save();
    }

    public function edit(Request $request)
    {
        $RequestQuotes = RequestQuotes::find($request->id);

        $RequestQuotes->user_id = Auth::user()->id;
        $RequestQuotes->listing_id = $request->id;
        $RequestQuotes->save();
    }

    public function delete(Request $request)
    {
        RequestQuotes::where('id',$request->id)->delete();
    }

}
