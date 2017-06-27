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
            ->paginate(15);

        $orders = Order::all();

        return view('user.list', ['users' => $users, 'orders' => $orders]);
    }

    public function indexDesc()
    {
        $users = User::select(DB::raw('id, name, phone_nr, admin, created_at'))
            ->orderBy('id', 'DESC')
            ->paginate(15);

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
            ->paginate(15);

        $orders = Order::all();

        return view('user.list', ['users' => $users, 'orders' => $orders]);
    }

    public function sortNameDesc()
    {
        $users = User::select(DB::raw('id, name, phone_nr, admin, created_at'))
            ->orderBy('name', 'DESC')
            ->paginate(15);

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
            ->paginate(15);

        $orders = Order::all();

        return view('user.list', ['users' => $users, 'orders' => $orders]);
    }

    public function sortCreatedAtDesc()
    {
        $users = User::select(DB::raw('id, name, phone_nr, admin, created_at'))
            ->orderBy('created_at')
            ->paginate(15);

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
            ->paginate(15);

        $orders = Order::all();

        return view('user.list', ['users' => $users, 'orders' => $orders]);
    }

    public function sortTypeDesc()
    {
        $users = User::select(DB::raw('id, name, phone_nr, admin, created_at'))
            ->orderBy('admin')
            ->paginate(15);

        $orders = Order::all();

        return view('user.list', ['users' => $users, 'orders' => $orders]);
    }

    /*
     * Search
     */
    public function search()
    {
        $value = \Request::get('value');

        $users = User::select(DB::raw('id, name, phone_nr, address, place, admin, created_at'))
            ->where('id', 'LIKE', '%' . $value . '%')
            ->orWhere('name', 'LIKE', '%' . $value . '%')
            ->orWhere('phone_nr', 'LIKE', '%' . $value . '%')
            ->orWhere('address', 'LIKE', '%' . $value . '%')
            ->orWhere('place', 'LIKE', '%' . $value . '%')
            ->orWhere('created_at', 'LIKE', '%' . $value . '%')
            ->orWhere('phone_nr', 'LIKE', '%' . $value . '%')
            ->paginate(15);

        $orders = Order::all();

        return view('user.list', ['users' => $users, 'orders' => $orders]);
    }

    /*
     * Make admin
     */

    public function edit($id)
    {
        $user = User::findOrFail($id);

        return View('user.edit')->with('user', $user);
    }

    public function update(Request $request, $id)
    {

        $user = User::findOrFail($id);

        $user->name = $request->name;
        $user->email = $request->email;
        $user->dob = $request->dob;
        $user->address = $request->address;
        $user->zip = $request->zip;
        $user->place = $request->place;
        $user->phone_nr = $request->phone_nr;

        if ($request->admin === 'on') {
            $request->admin = true;
        } else {
            $request->admin = false;
        }

        $user->admin = $request->admin;

        $user->save();

        return redirect("/users");
    }

    public function delete($id)
    {
        $user = User::findOrFail($id);
        return view('user.delete', compact('user'));
    }

    public function destroy($id)
    {
        User::destroy($id);

        return redirect("/users");
    }
}
