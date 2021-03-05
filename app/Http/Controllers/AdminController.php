<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use App\Models\User;
use App\Models\Vendor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    public function TotalListingView()
    {
        $user = Auth::user();

        if (!$user) {
            return redirect('login')->withErrors('Please login to veiw.');
        }

        $TotalListing = Listing::orderBy('id','DESC')->paginate(30);

        return view('admin-dashboard.total-listing', [ 'user' => $user, 'TotalListing' => $TotalListing]);
    }

    public function TotalUsersView()
    {
        $user = Auth::user();

        if (!$user) {
            return redirect('login')->withErrors('Please login to veiw.');
        }

        $TotalUser = User::orderBy('id','DESC')->paginate(30);

        return view('admin-dashboard.total-users', [ 'user' => $user, 'TotalUser' => $TotalUser]);
    }

    public function TotalVendorsView()
    {
        $user = Auth::user();

        if (!$user) {
            return redirect('login')->withErrors('Please login to veiw.');
        }

        $TotalVendor = Vendor::orderBy('id','DESC')->paginate(30);

        return view('admin-dashboard.total-vendors', [ 'user' => $user, 'TotalVendor' => $TotalVendor]);
    }

    public function AdminListShow($id)
    {
        $user = Auth::user();

        if (!$user) {
            return redirect('login')->withErrors('Please login to veiw.');
        }

        $Listing = Listing::where('id', $id)->first();

        return view('admin-dashboard.admin-list-show', [ 'user' => $user, 'Listing' => $Listing]);
    }

    public function CreateListShow()
    {
        $user = Auth::user();

        if (!$user) {
            return redirect('login')->withErrors('Please login to veiw.');
        }

        return view('admin-dashboard.admin-create-listing', [ 'user' => $user]);
    }

    public function CreateList(Request $request)
    {
        $featured = false;
        $status = false;

        $user = Auth::user();

        if (!$user) {
            return redirect()->back()->withErrors('Please login to create listing.');
        }

        if (isset($request->featured)) {
            $featured = true;
        }
        else
        {
            $featured = false;
        }

        if (isset($request->status)) {
            $status = true;
        }
        else
        {
            $status = false;
        }

        $validate = Validator::make($request->all(), [
            'title' => 'required',
            'category' => 'required',
            'address' => 'required',
            'city' => 'required',
            'country' => 'required',
            'description' => 'required',
            'facebook' => 'required',
            'twitter' => 'required',
            'instagram' => 'required',
            'youtube' => 'required',
        ]);

        if ($validate->fails()) {
            return redirect()->back()->withErrors($validate->errors());
        }

        $listing = new Listing();

        if ($request->hasFile('hero_image')) {
            $hero_image = $request->file('hero_image');
            $extention = $hero_image->getClientOriginalName();
            $filename = $extention;
            $hero_image->move('listing-image', $filename);
            $hero_image = $filename;
        }

        if ($request->hasFile('image1')) {
            $image1 = $request->file('image1');
            $extention = $image1->getClientOriginalName();
            $filename1 = $extention;
            $image1->move('listing-image', $filename1);
            $image1 = $filename1;
        }

        if ($request->hasFile('image2')) {
            $image2 = $request->file('image2');
            $extention = $image2->getClientOriginalName();
            $filename2 = $extention;
            $image2->move('listing-image', $filename2);
            $image2 = $filename2;
        }

        if ($request->hasFile('image3')) {
            $image3 = $request->file('image3');
            $extention = $image3->getClientOriginalName();
            $filename3 = $extention;
            $image3->move('listing-image', $filename3);
            $image3 = $filename3;
        }

        $listing->title = $request->title;
        $listing->category = $request->category;
        $listing->city = $request->city;
        $listing->country = $request->country;
        $listing->zipcode = $request->zipcode;
        $listing->address = $request->address;
        $listing->description = $request->description;
        $listing->latitude = $request->latitude;
        $listing->longitude = $request->longitude;
        $listing->hero_image = $hero_image;
        $listing->image1 = $image1 ?? NULL;
        $listing->image2 = $image2 ?? NULL;
        $listing->image3 = $image3 ?? NULL;
        $listing->facebook = $request->facebook;
        $listing->twitter = $request->twitter;
        $listing->instagram = $request->instagram;
        $listing->youtube = $request->youtube;
        $listing->featured = $featured;
        $listing->status = $status;
        $listing->vendor_name = $user->name;
        $listing->vendor_email = $user->email;
        $listing->vendor_phone_number = $user->phone_number;
        $listing->vendor_id = $user->id;
        $listing->vendor_status = $user->blocked;

        $listing->save();

        return redirect()->back()->withSuccess('List has been created .');
    }

    public function AdminEditListShow($id)
    {
        $user = Auth::user();

        if (!$user) {
            return redirect()->back()->withErrors('Please login to edit listing.');
        }

        $Listing = Listing::where('id', $id)->first();

        return view('admin-dashboard.admin-list-edit', [
            'user' => $user,
            'listings' => $Listing,
        ]);
    }

    public function AdminEditList(Request $request)
    {
        $featured = false;
        $status = false;

        $user = Auth::user();

        if (!$user) {
            return redirect()->back()->withErrors('Please login to edit listing.');
        }

        if (isset($request->featured)) {
            $featured = true;
        }
        else
        {
            $featured = false;
        }

        if (isset($request->status)) {
            $status = true;
        }
        else
        {
            $status = false;
        }

        $validate = Validator::make($request->all(), [
            'title' => 'required',
            'category' => 'required',
            'address' => 'required',
            'city' => 'required',
            'country' => 'required',
            'description' => 'required',
            'facebook' => 'required',
            'twitter' => 'required',
            'instagram' => 'required',
            'youtube' => 'required',
        ]);

        if ($validate->fails()) {
            return redirect()->back()->withErrors($validate->errors());
        }

        $listing = Listing::where('id', $request->id)->first();

        if ($request->hasFile('hero_image')) {
            $hero_image = $request->file('hero_image');
            $extention = $hero_image->getClientOriginalName();
            $filename = $extention;
            $hero_image->move('listing-image', $filename);
            $hero_image = $filename;
        }

        if ($request->hasFile('image1')) {
            $image1 = $request->file('image1');
            $extention = $image1->getClientOriginalName();
            $filename = $extention;
            $image1->move('listing-image', $filename);
            $image1 = $filename;
        }

        if ($request->hasFile('image2')) {
            $image2 = $request->file('image2');
            $extention = $image2->getClientOriginalName();
            $filename = $extention;
            $image2->move('listing-image', $filename);
            $image2 = $filename;
        }

        if ($request->hasFile('image3')) {
            $image3 = $request->file('image3');
            $extention = $image3->getClientOriginalName();
            $filename = $extention;
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
        $listing->featured = $featured;
        $listing->status = $status;

        $listing->save();

        return redirect()->back()->withSuccess('List has been updated .');
    }

    public function ListDelete($id)
    {
        $user = Auth::user();

        if (!$user) {
            return redirect('login')->withErrors('Please login to perfrom action.');
        }

        if($user->isUser())
        {
            return redirect()->back()->withErrors("You don't have permission to delete listings .");
        }

        Listing::where('id',$id)->delete();
        return redirect('admin-listings')->withSuccess('List deleted Successfully .');
    }

    public function CreateUserShow()
    {
        $user = Auth::user();

        if (!$user) {
            return redirect('login')->withErrors('Please login to veiw.');
        }

        return view('admin-dashboard.admin-create-user', [ 'user' => $user]);
    }

    public function CreateUser(Request $request)
    {
        $blocked = false;

        $user = Auth::user();

        if (!$user) {
            return redirect()->back()->withErrors('Please login to create user.');
        }

        if (isset($request->blocked)) {
            $blocked = true;
        }
        else
        {
            $blocked = false;
        }

        $validate = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|unique:users',
            'phone_number' => 'required',
            'role' => 'required',
            'password' => 'required',
        ]);

        if ($validate->fails()) {
            return redirect()->back()->withErrors($validate->errors());
        }

        if ($request->hasFile('image')) {
            $img = $request->file('image');
            $extention = $img->getClientOriginalExtension();
            $filename = time() . '.' . $extention;
            $img->move('user-image', $filename);
            $userimage = $filename;
        }

        $NewUser = new User();

        $NewUser->name = $request->name;
        $NewUser->email = $request->email;
        $NewUser->phone_number = $request->phone_number;
        $NewUser->password = Hash::make($request->password);
        $NewUser->role = $request->role;
        $NewUser->blocked = $blocked;
        $NewUser->description = $request->description;
        $NewUser->image = $userimage ?? $NewUser->image;

        $NewUser->save();

        return redirect()->back()->withSuccess('User has been created .');
    }

    public function UserShow($id)
    {
        $user = Auth::user();

        if (!$user) {
            return redirect('login')->withErrors('Please login to veiw.');
        }

        $Users = User::where('id', $id)->first();

        return view('admin-dashboard.admin-user-show', [ 'user' => $user, 'Users' => $Users]);
    }

    public function AdminEditUserShow($id)
    {
        $user = Auth::user();

        if (!$user) {
            return redirect()->back()->withErrors('Please login to user listing.');
        }

        $EditUser = User::where('id', $id)->first();

        return view('admin-dashboard.admin-user-edit', [
            'user' => $user,
            'EditUser' => $EditUser,
        ]);
    }

    public function AdminEditUser(Request $request)
    {
        $blocked = false;

        $user = Auth::user();

        if (!$user) {
            return redirect()->back()->withErrors('Please login to edit user.');
        }

        if (isset($request->blocked)) {
            $blocked = true;
        }
        else
        {
            $blocked = false;
        }

        $validate = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required',
            'phone_number' => 'required',
            'role' => 'required',
        ]);

        if ($validate->fails()) {
            return redirect()->back()->withErrors($validate->errors());
        }

        if ($request->hasFile('image')) {
            $img = $request->file('image');
            $extention = $img->getClientOriginalExtension();
            $filename = time() . '.' . $extention;
            $img->move('user-image', $filename);
            $userimage = $filename;
        }

        $EditUser = User::where('id',$request->id)->first();

        $EditUser->name = $request->name;
        $EditUser->email = $request->email;
        $EditUser->phone_number = $request->phone_number;
        $EditUser->password = Hash::make($request->password) ?? $EditUser->password;
        $EditUser->role = $request->role;
        $EditUser->blocked = $blocked;
        $EditUser->description = $request->description ?? $EditUser->description;
        $EditUser->image = $userimage ?? $EditUser->image;

        $EditUser->save();

        return redirect()->back()->withSuccess('User has been updated .');
    }

    public function UserDelete($id)
    {
        $LoginUser = Auth::user();

        if (!$LoginUser) {
            return redirect('login')->withErrors('Please login to veiw.');
        }

        $user = User::where('id',$id)->first();

        if($user->isSuperAdmin()){
            return redirect()->back()->withErrors('Super Admin cannot be deleted');
        }

        if($user->isAdmin()){

            $ControllingUser = Auth::user();

            if(!$ControllingUser->isSuperAdmin())
            {
                return redirect()->back()->withErrors('Only super admin can be delete admin.');
            }
            else
            {
                $user->delete();
                return redirect()->back()->withSuccess('User deleted Successfully.');
            }
        }

        $user->delete();
        return redirect('admin-users')->withSuccess('User deleted Successfully.');

    }

    public function VendorShow($id)
    {
        $user = Auth::user();

        if (!$user) {
            return redirect('login')->withErrors('Please login to veiw.');
        }

        $Vendors = Vendor::where('id', $id)->first();

        return view('admin-dashboard.admin-vendor-show', [ 'user' => $user, 'Vendors' => $Vendors]);
    }

    public function AdminEditVendorShow($id)
    {
        $user = Auth::user();

        if (!$user) {
            return redirect()->back()->withErrors('Please login to edit vendor.');
        }

        $Vendor = Vendor::where('id', $id)->first();

        return view('admin-dashboard.admin-vendor-edit', [
            'user' => $user,
            'Vendor' => $Vendor,
        ]);
    }

    public function AdminEditVendor(Request $request)
    {
        $status = false;

        $user = Auth::user();

        if (!$user) {
            return redirect()->back()->withErrors('Please login to edit vendor.');
        }

        if (isset($request->status)) {
            $status = true;
        }
        else
        {
            $status = false;
        }

        $validate = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required',
            'phone_number' => 'required',
        ]);

        if ($validate->fails()) {
            return redirect()->back()->withErrors($validate->errors());
        }

        if ($request->hasFile('image')) {
            $img = $request->file('image');
            $extention = $img->getClientOriginalExtension();
            $filename = time() . '.' . $extention;
            $img->move('user-image', $filename);
            $userimage = $filename;
        }

        $Vendor = Vendor::where('id',$request->id)->first();

        $Vendor->name = $request->name;
        $Vendor->email = $request->email;
        $Vendor->phone_number = $request->phone_number;
        $Vendor->status = $status;
        $Vendor->image = $userimage ?? $Vendor->image;

        $Vendor->save();

        return redirect()->back()->withSuccess('Vendor has been updated .');
    }

    public function VendorDelete($id)
    {
        $user = Auth::user();

        if (!$user) {
            return redirect('login')->withErrors('Please login to veiw.');
        }
        
        if($user->isUser() || $user->isVendor())
        {
            return redirect()->back()->withErrors('Only admins and super admin can delete vendors .');
        }

        Vendor::where('id',$id)->delete();
        return redirect('admin-vendors')->withSuccess('Vendor deleted Successfully.');
    }

}