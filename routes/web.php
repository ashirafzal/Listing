<?php

use Illuminate\Support\Facades\Route;

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/', '\App\Http\Controllers\ListingController@WelcomeIndex');

Route::get('/profile', [App\Http\Controllers\HomeController::class, 'profile'])->name('profile');

Auth::routes();


Route::middleware('auth')->group(function () {

    /*** User HomePage and Logout routes ***/
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
    /*** User HomePage and Logout routes ***/


    /*** User related routes ***/
    Route::post('edit', '\App\Http\Controllers\UserController@edit');
    Route::post('update-password', '\App\Http\Controllers\UserController@UpdatePassword');
    Route::get('become-a-vendor', '\App\Http\Controllers\UserController@BeAVendor');
    /*** End of user related routes ***/


    /*** Admin related routes ***/
    Route::get('admin-listings', '\App\Http\Controllers\AdminController@TotalListingView')->name('admin-listings');
    Route::get('admin-users', '\App\Http\Controllers\AdminController@TotalUsersView')->name('admin-users');
    Route::get('admin-vendors', '\App\Http\Controllers\AdminController@TotalVendorsView')->name('admin-vendors');
    Route::get('listing-show/{id}', '\App\Http\Controllers\AdminController@AdminListShow');
    Route::get('list-delete/{id}', '\App\Http\Controllers\AdminController@ListDelete');
    Route::get('user-show/{id}', '\App\Http\Controllers\AdminController@UserShow');
    Route::get('user-delete/{id}', '\App\Http\Controllers\AdminController@UserDelete');
    Route::get('vendor-show/{id}', '\App\Http\Controllers\AdminController@VendorShow');
    Route::get('vendor-delete/{id}', '\App\Http\Controllers\AdminController@VendorDelete');
    Route::get('admin-list-show/{id}', '\App\Http\Controllers\AdminController@AdminEditListShow');
    Route::post('admin-edit-list', '\App\Http\Controllers\AdminController@AdminEditList');
    Route::get('admin-user-edit-show/{id}', '\App\Http\Controllers\AdminController@AdminEditUserShow');
    Route::post('admin-edit-user', '\App\Http\Controllers\AdminController@AdminEditUser');
    Route::get('admin-vendor-edit-show/{id}', '\App\Http\Controllers\AdminController@AdminEditVendorShow');
    Route::post('admin-edit-vendor', '\App\Http\Controllers\AdminController@AdminEditVendor');
    Route::get('admin-users', '\App\Http\Controllers\AdminController@TotalUsersView')->name('admin-users');
    Route::get('create-user', '\App\Http\Controllers\AdminController@CreateUserShow')->name('create-user');
    Route::post('admin-create-user', '\App\Http\Controllers\AdminController@CreateUser');
    Route::get('create-list', '\App\Http\Controllers\AdminController@CreateListShow')->name('create-list');
    Route::post('admin-create-list', '\App\Http\Controllers\AdminController@CreateList');
    /*** End of admin related routes***/


    /*** Listing related routes ***/
    Route::get('add-listing', '\App\Http\Controllers\ListingController@AddListingIndex');
    Route::get('listing', '\App\Http\Controllers\ListingController@index');
    Route::post('create-list', '\App\Http\Controllers\ListingController@create');
    Route::get('edit-listing/{id}', '\App\Http\Controllers\ListingController@EditView');
    Route::post('edit-list', '\App\Http\Controllers\ListingController@edit');
    Route::get('delete-list/{id}', '\App\Http\Controllers\ListingController@delete');
    /***  End of listing related routes ***/


    /*** Wish List related routes ***/
    Route::get('wishlist', '\App\Http\Controllers\WishListController@index')->name('wishlist');
    Route::get('delete-wishlist/{id}', '\App\Http\Controllers\WishListController@delete');
    /*** End of wish list routes ***/


    /*** RequestQuote related routes ***/
    Route::get('request-quote-delete/{id}', '\App\Http\Controllers\RequestQuotesController@delete');
    /*** End of RequestQuote routes ***/

});

/*** Reviews related routes ***/
Route::get('reviews', '\App\Http\Controllers\ReviewsController@index');
Route::post('review-create', '\App\Http\Controllers\ReviewsController@create');
/*** End of Reviews routes ***/


/*** RequestQuote related routes ***/
Route::post('request-quote-create', '\App\Http\Controllers\RequestQuotesController@create');
Route::get('request-quote', '\App\Http\Controllers\RequestQuotesController@index');
/*** End ofRequestQuote routes ***/


/*** Wish List related routes ***/
Route::get('list-detail/wish-list/{id}', '\App\Http\Controllers\WishListController@create');
/*** End of wish list routes ***/


/*** General routes ***/
Route::get('list-detail/{id}', '\App\Http\Controllers\ListingController@view');
Route::post('contact-submit', '\App\Http\Controllers\ListingController@ContactUs');
Route::get('all-listing', '\App\Http\Controllers\ListingController@AllListing');
Route::get('search-view', '\App\Http\Controllers\ListingController@SearchView');
/*** End of General routes ***/