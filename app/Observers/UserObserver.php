<?php

namespace App\Observers;

use App\Models\Listing;
use App\Models\User;
use App\Models\Vendor;

class UserObserver
{
    /**
     * Handle the User "created" event.
     *
     * @param  \App\Models\User  $user
     * @return void
     */
    public function created(User $user)
    {
        if($user->role == User::ROLE_VENDOR || $user->role == User::ROLE_ADMIN || $user->role == User::ROLE_SUPER_ADMIN)
        {
            $vendor = new Vendor();
    
            $vendor->name = $user->name;
            $vendor->email = $user->email;
            $vendor->phone_number = $user->phone_number;
            $vendor->user_id = $user->id;
            $vendor->image = $user->image;
            $vendor->status = Vendor::STATUS_NOT_BLOCKED;
    
            $vendor->save();
        }
    }

    /**
     * Handle the User "updated" event.
     *
     * @param  \App\Models\User  $user
     * @return void
     */
    public function updated(User $user)
    {
        if ($user->isDirty('role')) 
        {
            if($user->role == User::ROLE_USER)
            {
                $vendor = Vendor::where('user_id', $user->id)->count();

                if($vendor > 0)
                {
                    Vendor::where('user_id', $user->id)->delete();
                }
            }
            else
            {
                $vendor = Vendor::where('user_id', $user->id)->count();

                if($vendor < 1)
                {
                    $vendor = new Vendor();
    
                    $vendor->name = $user->name;
                    $vendor->email = $user->email;
                    $vendor->phone_number = $user->phone_number;
                    $vendor->user_id = $user->id;
                    $vendor->image = $user->image;
                    $vendor->status = Vendor::STATUS_NOT_BLOCKED;
            
                    $vendor->save();
                }
            }
        }
    }

    /**
     * Handle the User "deleted" event.
     *
     * @param  \App\Models\User  $user
     * @return void
     */
    public function deleted(User $user)
    {
        if($user->role == User::ROLE_VENDOR)
        {
            $vendor = Vendor::where('user_id', $user->id)->first();
            
            Listing::where('vendor_id', $vendor->id)->delete();
        }
    }

    /**
     * Handle the User "restored" event.
     *
     * @param  \App\Models\User  $user
     * @return void
     */
    public function restored(User $user)
    {
        //
    }

    /**
     * Handle the User "force deleted" event.
     *
     * @param  \App\Models\User  $user
     * @return void
     */
    public function forceDeleted(User $user)
    {
        //
    }
}
