<?php

namespace App\Http\Controllers;

use App\Models\Vendor;
use App\Models\WishList;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WishListController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        if(!$user){
            return redirect()->back()->withErrors('Please login to see your wishlist.');
        }

        $WishList = WishList::with('listings')->where('user_id', $user->id)->paginate(10);
        $Vendor = Vendor::where('user_id', $user->id)->count();
        
        return view('dashboard.wish_list', ['wishlists' => $WishList, 'user' => $user, 'vendor' => $Vendor]);

    }

    public function create($id)
    {

        $user = Auth::user();

        if(!$user){
            return redirect()->back()->withErrors('Please login to add list in wishlist.');
        }

        $count = WishList::where('user_id', $user->id)->where('listing_id', $id)->count();

        if($count){
            return redirect()->back()->withErrors('Already present in wishlist.');
        }

        $WishList = new WishList();
        $WishList->user_id = $user->id;
        $WishList->listing_id = $id;

        $WishList->save();

        return redirect()->back()->withSuccess('Added to wishlist successfully.');
    }

    public function delete()
    {
    }
}
