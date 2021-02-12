<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ListingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('listings', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->boolean('category');
            $table->string('city');
            $table->string('country');
            $table->string('zipcode')->nullable();
            $table->string('description');
            $table->double('latitude')->nullable();
            $table->double('longitude')->nullable();
            $table->binary('hero_image');
            $table->binary('image1')->nullable();
            $table->binary('image2')->nullable();
            $table->binary('image3')->nullable();
            $table->string('facebook');
            $table->string('twitter');
            $table->string('instagram');
            $table->string('youtube');
            $table->boolean('featured')->default(0);
            $table->boolean('status')->default(0);
            $table->string('vendor_name');
            $table->string('vendor_email');
            $table->string('vendor_phone_number')->nullable();
            $table->foreignId('vendor_id');
            $table->boolean('vendor_status')->default(0);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('listing', function (Blueprint $table) {
            //
        });
    }
}
