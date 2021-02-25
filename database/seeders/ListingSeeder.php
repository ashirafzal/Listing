<?php

namespace Database\Seeders;

use App\Models\Listing;
use Illuminate\Database\Seeder;

class ListingSeeder extends Seeder
{
    public function run()
    {
        $listing = new Listing();
        $listing->title = 'Checker One';
        $listing->category = 'Venue';
        $listing->city = 'Karachi';
        $listing->country = 'Pakistan';
        $listing->zipcode = '8850';
        $listing->description = 'description';
        $listing->hero_image = '16908987.jpg';
        $listing->facebook = 'www.facebook.com';
        $listing->twitter = 'www.twitter.com';
        $listing->instagram = 'www.instagram.com';
        $listing->youtube = 'www.youtube.com';
        $listing->featured = true;
        $listing->status = false;
        $listing->vendor_name = 'Vendor';
        $listing->vendor_email = 'vendor@listing.com';
        $listing->vendor_phone_number = '03423351437';
        $listing->vendor_id = 3;
        $listing->vendor_status = false;
        $listing->address = 'karachi, Sindh, Pakistan';
        $listing->save();

        $listing = new Listing();
        $listing->title = 'Checker Two';
        $listing->category = 'Florist';
        $listing->city = 'Karachi';
        $listing->country = 'Pakistan';
        $listing->zipcode = '8850';
        $listing->description = 'description';
        $listing->hero_image = '16908987.jpg';
        $listing->facebook = 'www.facebook.com';
        $listing->twitter = 'www.twitter.com';
        $listing->instagram = 'www.instagram.com';
        $listing->youtube = 'www.youtube.com';
        $listing->featured = true;
        $listing->status = false;
        $listing->vendor_name = 'Vendor';
        $listing->vendor_email = 'vendor@listing.com';
        $listing->vendor_phone_number = '03423351437';
        $listing->vendor_id = 3;
        $listing->vendor_status = false;
        $listing->address = 'karachi, Sindh, Pakistan';
        $listing->save();

        $listing = new Listing();
        $listing->title = 'Checker Three';
        $listing->category = 'Cake';
        $listing->city = 'Karachi';
        $listing->country = 'Pakistan';
        $listing->zipcode = '8850';
        $listing->description = 'description';
        $listing->hero_image = '16908987.jpg';
        $listing->facebook = 'www.facebook.com';
        $listing->twitter = 'www.twitter.com';
        $listing->instagram = 'www.instagram.com';
        $listing->youtube = 'www.youtube.com';
        $listing->featured = true;
        $listing->status = false;
        $listing->vendor_name = 'Vendor';
        $listing->vendor_email = 'vendor@listing.com';
        $listing->vendor_phone_number = '03423351437';
        $listing->vendor_id = 3;
        $listing->vendor_status = false;
        $listing->address = 'karachi, Sindh, Pakistan';
        $listing->save();

        $listing = new Listing();
        $listing->title = 'Checker Four';
        $listing->category = 'Venue';
        $listing->city = 'Karachi';
        $listing->country = 'Pakistan';
        $listing->zipcode = '8850';
        $listing->description = 'description';
        $listing->hero_image = '16908987.jpg';
        $listing->facebook = 'www.facebook.com';
        $listing->twitter = 'www.twitter.com';
        $listing->instagram = 'www.instagram.com';
        $listing->youtube = 'www.youtube.com';
        $listing->featured = false;
        $listing->status = false;
        $listing->vendor_name = 'Vendor';
        $listing->vendor_email = 'vendor@listing.com';
        $listing->vendor_phone_number = '03423351437';
        $listing->vendor_id = 3;
        $listing->vendor_status = false;
        $listing->address = 'karachi, Sindh, Pakistan';
        $listing->save();

        $listing = new Listing();
        $listing->title = 'Checker Five';
        $listing->category = 'Photographer';
        $listing->city = 'Karachi';
        $listing->country = 'Pakistan';
        $listing->zipcode = '8850';
        $listing->description = 'description';
        $listing->hero_image = '16908987.jpg';
        $listing->facebook = 'www.facebook.com';
        $listing->twitter = 'www.twitter.com';
        $listing->instagram = 'www.instagram.com';
        $listing->youtube = 'www.youtube.com';
        $listing->featured = false;
        $listing->status = false;
        $listing->vendor_name = 'Vendor';
        $listing->vendor_email = 'vendor@listing.com';
        $listing->vendor_phone_number = '03423351437';
        $listing->vendor_id = 3;
        $listing->vendor_status = false;
        $listing->address = 'karachi, Sindh, Pakistan';
        $listing->save();
    }
}
