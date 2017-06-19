<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use App\Order;


class ProfileController extends Controller
{
    public function profile($id)
    {
        $user = User::whereId($id)->first();
        $orders = Order::where('user_id', Auth::user()->id)->get();

        $data = array('user' => $user, 'orders' =>  $orders);

        return view('user.profile')->with($data);
    }

    public function my_profile()
    {
        $user = User::whereId(Auth::user()->id)->first();

        $orders = Order::where('user_id', Auth::user()->id)->get();

        $data = array('user' => $user, 'orders' =>  $orders);

        return view('user.profile')->with($data);
    }
}
