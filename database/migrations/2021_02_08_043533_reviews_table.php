<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reviews', function (Blueprint $table) {
            $table->id();
            $table->foreignId('vendor_id');
            $table->foreignId('listing_id');
            $table->foreignId('user_id');
            $table->string('user_name');
            $table->binary('user_image')->nullable();
            $table->string('user_email');
            $table->integer('user_type');
            $table->string('review_text');
            $table->string('review_email');
            $table->boolean('rating')->default(0);
            $table->timestamp('date_time');
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
        Schema::table('reviews', function (Blueprint $table) {
            //
        });
    }
}
