<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/', '\App\Http\Controllers\ListingController@WelcomeIndex');

Route::get('/profile', [App\Http\Controllers\HomeController::class, 'profile'])->name('profile');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::get('reviews', '\App\Http\Controllers\ReviewsController@index');

Route::post('edit', '\App\Http\Controllers\UserController@edit');

Route::post('update-password', '\App\Http\Controllers\UserController@UpdatePassword');

Route::get('become-a-vendor', '\App\Http\Controllers\UserController@BeAVendor');

Route::get('add-listing', '\App\Http\Controllers\ListingController@AddListingIndex');

Route::get('listing', '\App\Http\Controllers\ListingController@index');

Route::post('create-list', '\App\Http\Controllers\ListingController@create');

Route::get('edit-listing/{id}', '\App\Http\Controllers\ListingController@EditView');

Route::post('edit-list', '\App\Http\Controllers\ListingController@edit');

Route::get('list-detail/{id}', '\App\Http\Controllers\ListingController@view');

Route::post('request-quote-create', '\App\Http\Controllers\RequestQuotesController@create');

Route::post('review-create', '\App\Http\Controllers\ReviewsController@create');

Route::get('list-detail/wish-list/{id}', '\App\Http\Controllers\WishListController@create');

Route::get('request-quote', '\App\Http\Controllers\RequestQuotesController@index');

Route::get('request-quote-delete/{id}', '\App\Http\Controllers\RequestQuotesController@delete');

Route::get('delete-list/{id}', '\App\Http\Controllers\ListingController@delete');

Route::get('reviews', '\App\Http\Controllers\ReviewsController@index');

Route::post('contact-submit', '\App\Http\Controllers\ListingController@ContactUs');

Route::get('all-listing', '\App\Http\Controllers\ListingController@AllListing');

Route::get('search-view', '\App\Http\Controllers\ListingController@SearchView');

Route::get('admin-listings', '\App\Http\Controllers\AdminController@TotalListingView');

Route::get('admin-users', '\App\Http\Controllers\AdminController@TotalUsersView');

Route::get('admin-vendors', '\App\Http\Controllers\AdminController@TotalVendorsView');