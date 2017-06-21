<?php

namespace App\Http\Controllers;

use App\User;
use App\Order;
use DB;
use Route;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    /*
     * Sort Id
     */
    public function index()
    {
        $users = User::select(DB::raw('id, name, phone_nr, admin, created_at'))
            ->orderBy('id')
            ->paginate(20);

        $orders = Order::all();

        return view('user.list', ['users' => $users, 'orders' => $orders]);
    }

    public function indexDesc()
    {
        $users = User::select(DB::raw('id, name, phone_nr, admin, created_at'))
            ->orderBy('id', 'DESC')
            ->paginate(20);

        $orders = Order::all();

        return view('user.list', ['users' => $users, 'orders' => $orders]);
    }

    /*
     * Sort Name
     */
    public function sortName()
    {
        $users = User::select(DB::raw('id, name, phone_nr, admin, created_at'))
            ->orderBy('name')
            ->paginate(20);

        $orders = Order::all();

        return view('user.list', ['users' => $users, 'orders' => $orders]);
    }

    public function sortNameDesc()
    {
        $users = User::select(DB::raw('id, name, phone_nr, admin, created_at'))
            ->orderBy('name', 'DESC')
            ->paginate(20);

        $orders = Order::all();

        return view('user.list', ['users' => $users, 'orders' => $orders]);
    }

    /*
     * Sort Created At
     */
    public function sortCreatedAt()
    {
        $users = User::select(DB::raw('id, name, phone_nr, admin, created_at'))
            ->orderBy('created_at', 'DESC')
            ->paginate(20);

        $orders = Order::all();

        return view('user.list', ['users' => $users, 'orders' => $orders]);
    }

    public function sortCreatedAtDesc()
    {
        $users = User::select(DB::raw('id, name, phone_nr, admin, created_at'))
            ->orderBy('created_at')
            ->paginate(20);

        $orders = Order::all();

        return view('user.list', ['users' => $users, 'orders' => $orders]);
    }

    /*
     * Sort Type
     */
    public function sortType()
    {
        $users = User::select(DB::raw('id, name, phone_nr, admin, created_at'))
            ->orderBy('admin', 'desc')
            ->paginate(20);

        $orders = Order::all();

        return view('user.list', ['users' => $users, 'orders' => $orders]);
    }

    public function sortTypeDesc()
    {
        $users = User::select(DB::raw('id, name, phone_nr, admin, created_at'))
            ->orderBy('admin')
            ->paginate(20);

        $orders = Order::all();

        return view('user.list', ['users' => $users, 'orders' => $orders]);
    }

    public function search($value)
    {

    }
}
