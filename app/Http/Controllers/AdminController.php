<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index() {
       return view('admin');
    }

    public function user() {
        echo "<h1>". $user = Auth::user()->name. "</h1>";
        return view('user', compact('user')); // Pass the user data to the view
    }
}
