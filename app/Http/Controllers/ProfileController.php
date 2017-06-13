<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;


class ProfileController extends Controller
{
    public function profile($id)
    {
        $user = User::whereId($id)->first();
        return view('user.profile', compact('user'));
    }

    public function my_profile()
    {
        $user = User::whereId(Auth::user()->id)->first();

        return view('user.profile', compact('user'));
    }
}
