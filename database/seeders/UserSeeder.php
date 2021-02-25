<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run()
    {
        // Super Admin 
        $user = new User();
        $user->email = 'superadmin@listing.com';
        $user->name = 'Super Admin';
        $user->password = Hash::make('superadmin@listing');
        $user->blocked = User::NOT_BLOCKED;
        $user->phone_number = '03423351437';
        $user->role = User::ROLE_SUPER_ADMIN;
        $user->save();

        // Admin 
        $user = new User();
        $user->email = 'admin@listing.com';
        $user->name = 'Admin';
        $user->password = Hash::make('admin@listing');
        $user->blocked = User::NOT_BLOCKED;
        $user->phone_number = '03423351437';
        $user->role = User::ROLE_ADMIN;
        $user->save();

        // Vendor 
        $user = new User();
        $user->email = 'vendor@listing.com';
        $user->name = 'Vendor';
        $user->password = Hash::make('vendor@listing');
        $user->blocked = User::NOT_BLOCKED;
        $user->phone_number = '03423351437';
        $user->role = User::ROLE_VENDOR;
        $user->save();

        // User 
        $user = new User();
        $user->email = 'user@listing.com';
        $user->name = 'User';
        $user->password = Hash::make('user@listing');
        $user->blocked = User::NOT_BLOCKED;
        $user->phone_number = '03423351437';
        $user->role = User::ROLE_USER;
        $user->save();
    }
}
