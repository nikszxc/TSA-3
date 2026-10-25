<?php

namespace App\Http\Controllers;

use App\Models\User;

class UserController extends Controller
{
    // Profile page: the single demo user.
    public function profile()
    {
        $user = User::first();

        return view('profile', compact('user'));
    }
}
