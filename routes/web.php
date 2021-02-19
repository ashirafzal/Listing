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

Route::get('/', function () {
    return view('welcome');
});

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

Route::get('request-quote', function () {
    return view('dashboard.request-quote');
});