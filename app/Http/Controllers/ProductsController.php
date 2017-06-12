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

        return $products;
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        /*
         * --Verschillende methodes--
         *
         * 1)
        $product = new Product;
        $product->user_id = Auth::user()->id;
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->image = $request->image;

        $product->save();
        */

        /*
         * 2)
        // Product::create($request->all());
        */

        /*
         * 3
         */
        Product::create([
            'user_id' => Auth::user()->id,
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'image' => $request->image
        ]);
    }

    public function show($id)
    {
        //
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
