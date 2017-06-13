<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Auth;
use DB;

class ProductsController extends Controller
{
    public function index()
    {
        $products = Product::all();

        return view('products.products', compact('products'));
    }

    public function create()
    {
        return view('products.create');
    }


    public function store(Request $request)
    {
//        $this->validate($request, [
//        'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
//    ]);

        /*
         * Image naam veranderen naar timestamp_user->id en opslaan.
         */
        $imageName = time() . "_" . Auth::user()->id . "." . $request->image->getClientOriginalExtension();
        $request->image->move(public_path('images'), $imageName);

        $product = new Product;
        $product->user_id = Auth::user()->id;
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->image = "public/images/" . $imageName;

        $product->save();

        return redirect('/products');
    }

    public function show($id)
    {

    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
