<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $user = Auth::user();
        return view('home', ['user' => $user]);
    }

    public function profile()
    {
        $user = Auth::user();
        return view('dashboard.profile', ['user' => $user]);
    }
}